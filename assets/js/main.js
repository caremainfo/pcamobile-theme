/**
 * PCA Mobile — Main JavaScript
 */
(function () {
    'use strict';

    // --- Premium Layered Beams + Noise (Hero Canvas) ---
    (function initHeroBeams() {
        var beamCanvas = document.getElementById('hero-beams');
        var noiseCanvas = document.getElementById('hero-noise');
        if (!beamCanvas || !noiseCanvas) return;

        var bCtx = beamCanvas.getContext('2d');
        var nCtx = noiseCanvas.getContext('2d');
        if (!bCtx || !nCtx) return;

        var LAYERS = 3;
        var BEAMS_PER_LAYER = 8;
        var beams = [];
        var animId = 0;
        var W = 0, H = 0;

        function createBeam(w, h, layer) {
            var baseSpeed = 0.2 + layer * 0.2;
            var baseOpacity = 0.08 + layer * 0.05;
            var baseWidth = 10 + layer * 5;
            return {
                x: Math.random() * w,
                y: Math.random() * h,
                width: baseWidth + Math.random() * 15,
                length: h * 2.5,
                angle: -35 + Math.random() * 10,
                speed: baseSpeed + Math.random() * 0.2,
                opacity: baseOpacity + Math.random() * 0.1,
                pulse: Math.random() * Math.PI * 2,
                pulseSpeed: 0.01 + Math.random() * 0.015,
                layer: layer,
            };
        }

        function sizeCanvases() {
            var dpr = window.devicePixelRatio || 1;
            var rect = beamCanvas.parentElement.getBoundingClientRect();
            W = rect.width;
            H = rect.height;
            [beamCanvas, noiseCanvas].forEach(function(c) {
                c.width = W * dpr;
                c.height = H * dpr;
                c.style.width = W + 'px';
                c.style.height = H + 'px';
            });
            bCtx.setTransform(dpr, 0, 0, dpr, 0, 0);
            nCtx.setTransform(dpr, 0, 0, dpr, 0, 0);

            beams = [];
            for (var layer = 1; layer <= LAYERS; layer++) {
                for (var i = 0; i < BEAMS_PER_LAYER; i++) {
                    beams.push(createBeam(W, H, layer));
                }
            }
        }

        function generateNoise() {
            var dpr = window.devicePixelRatio || 1;
            var imgData = nCtx.createImageData(noiseCanvas.width, noiseCanvas.height);
            var d = imgData.data;
            for (var i = 0; i < d.length; i += 4) {
                var v = Math.random() * 255;
                d[i] = v; d[i + 1] = v; d[i + 2] = v; d[i + 3] = 12;
            }
            nCtx.putImageData(imgData, 0, 0);
        }

        function drawBeam(beam) {
            bCtx.save();
            bCtx.translate(beam.x, beam.y);
            bCtx.rotate((beam.angle * Math.PI) / 180);

            var po = Math.min(1, beam.opacity * (0.8 + Math.sin(beam.pulse) * 0.4));
            var grad = bCtx.createLinearGradient(0, 0, 0, beam.length);
            // Cyan matching --color-accent: #0693e3
            grad.addColorStop(0, 'rgba(6,147,227,0)');
            grad.addColorStop(0.2, 'rgba(6,147,227,' + (po * 0.5) + ')');
            grad.addColorStop(0.5, 'rgba(6,147,227,' + po + ')');
            grad.addColorStop(0.8, 'rgba(6,147,227,' + (po * 0.5) + ')');
            grad.addColorStop(1, 'rgba(6,147,227,0)');

            bCtx.fillStyle = grad;
            bCtx.filter = 'blur(' + (2 + beam.layer * 2) + 'px)';
            bCtx.fillRect(-beam.width / 2, 0, beam.width, beam.length);
            bCtx.restore();
        }

        function animate() {
            // Dark gradient background on beam canvas
            bCtx.filter = 'none';
            var bg = bCtx.createLinearGradient(0, 0, 0, H);
            bg.addColorStop(0, '#050508');
            bg.addColorStop(1, '#0a0f1a');
            bCtx.fillStyle = bg;
            bCtx.fillRect(0, 0, W, H);

            beams.forEach(function(beam) {
                beam.y -= beam.speed * (beam.layer / LAYERS + 0.5);
                beam.pulse += beam.pulseSpeed;
                if (beam.y + beam.length < -50) {
                    beam.y = H + 50;
                    beam.x = Math.random() * W;
                }
                drawBeam(beam);
            });

            generateNoise();
            animId = requestAnimationFrame(animate);
        }

        sizeCanvases();
        animate();

        // Pause when hero not visible
        var obs = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    if (!animId) animate();
                } else {
                    cancelAnimationFrame(animId);
                    animId = 0;
                }
            });
        }, { threshold: 0 });
        obs.observe(beamCanvas.parentElement);

        window.addEventListener('resize', function() {
            cancelAnimationFrame(animId);
            animId = 0;
            sizeCanvases();
            animate();
        });
    })();

    // --- Header Scroll Effect ---
    const header = document.querySelector('.site-header');
    if (header) {
        const onScroll = () => {
            header.classList.toggle('scrolled', window.scrollY > 50);
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    // --- Mobile Navigation ---
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('.nav-menu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            navToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });

        navMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    // --- Scroll Animations ---
    const animateElements = document.querySelectorAll('.fade-in');
    if (animateElements.length > 0) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }
        );

        animateElements.forEach(el => observer.observe(el));
    }

    // --- Contact Form ---
    const contactForm = document.querySelector('#contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const btn = contactForm.querySelector('button[type="submit"]');
            const msgEl = contactForm.querySelector('.form-message');
            const originalText = btn.textContent;

            btn.textContent = 'Wird gesendet…';
            btn.disabled = true;

            const formData = new FormData(contactForm);
            formData.append('action', 'pcamobile_contact');
            formData.append('nonce', window.pcamobile?.nonce || '');

            try {
                const res = await fetch(window.pcamobile?.ajax_url || '/wp-admin/admin-ajax.php', {
                    method: 'POST',
                    body: formData,
                });
                const data = await res.json();

                msgEl.textContent = data.data?.message || 'Nachricht gesendet.';
                msgEl.className = 'form-message ' + (data.success ? 'form-message--success' : 'form-message--error');
                msgEl.style.display = 'block';

                if (data.success) {
                    contactForm.reset();
                }
            } catch {
                msgEl.textContent = 'Netzwerkfehler. Bitte versuchen Sie es erneut.';
                msgEl.className = 'form-message form-message--error';
                msgEl.style.display = 'block';
            }

            btn.textContent = originalText;
            btn.disabled = false;

            setTimeout(() => {
                msgEl.style.display = 'none';
            }, 6000);
        });
    }

    // --- Counter Animation for Stats ---
    const counterElements = document.querySelectorAll('[data-count]');
    if (counterElements.length > 0) {
        const counterObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const target = parseFloat(el.dataset.count);
                        const suffix = el.dataset.suffix || '';
                        const prefix = el.dataset.prefix || '';
                        const decimal = el.dataset.count.includes('.') || el.dataset.count.includes(',');
                        const duration = 2000;
                        const start = performance.now();

                        function update(now) {
                            const progress = Math.min((now - start) / duration, 1);
                            const eased = 1 - Math.pow(1 - progress, 3);
                            const current = target * eased;
                            if (decimal) {
                                const formatted = current.toFixed(2).replace('.', ',');
                                el.textContent = prefix + formatted + suffix;
                            } else {
                                el.textContent = prefix + Math.round(current) + suffix;
                            }
                            if (progress < 1) requestAnimationFrame(update);
                        }
                        requestAnimationFrame(update);
                        counterObserver.unobserve(el);
                    }
                });
            },
            { threshold: 0.3 }
        );
        counterElements.forEach(el => counterObserver.observe(el));
    }

    // --- Smooth Scroll for Anchor Links ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const targetId = anchor.getAttribute('href');
            if (targetId === '#') return;

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                const offset = header ? header.offsetHeight : 0;
                const top = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });
})();
