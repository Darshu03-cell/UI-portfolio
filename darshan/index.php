<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darshan H D - UI/UX Designer Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/globals.css">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: .5;
            }
        }

        .animate-spin {
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .group:hover .group-hover\:translate-y-1 {
            transform: translateY(0.25rem);
        }

        .group:hover .group-hover\:translate-x-1 {
            transform: translateX(0.25rem);
        }

        .group:hover .group-hover\:scale-105 {
            transform: scale(1.05);
        }

        .group:hover .group-hover\:scale-110 {
            transform: scale(1.1);
        }

        .transition-transform {
            transition: transform 0.3s ease;
        }

        .transition-colors {
            transition: color 0.3s ease, background-color 0.3s ease;
        }

        .transition-shadow {
            transition: box-shadow 0.3s ease;
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        .backdrop-blur-md {
            backdrop-filter: blur(12px);
        }

        .backdrop-blur-sm {
            backdrop-filter: blur(4px);
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="min-h-screen bg-background">
    <?php include 'components/navigation.php'; ?>
    
    <main>
        <?php include 'components/hero.php'; ?>
        <?php include 'components/about.php'; ?>
        <?php include 'components/portfolio.php'; ?>
        <?php include 'components/testimonials.php'; ?>
        <?php include 'components/contact.php'; ?>
    </main>

    <script>
        // Navigation scroll functionality
        document.addEventListener('DOMContentLoaded', function() {
            const navItems = ['hero', 'about', 'portfolio', 'testimonials', 'contact'];
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            // Mobile menu toggle
            if (mobileMenuBtn && mobileMenu) {
                mobileMenuBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }

            // Smooth scrolling for navigation links
            document.querySelectorAll('[data-scroll]').forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('data-scroll');
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({ behavior: 'smooth' });
                    }
                    // Hide mobile menu after click
                    if (mobileMenu) {
                        mobileMenu.classList.add('hidden');
                    }
                });
            });

            // Active section highlighting
            function updateActiveSection() {
                const scrollPosition = window.scrollY + 100;
                
                navItems.forEach(sectionId => {
                    const section = document.getElementById(sectionId);
                    const navLink = document.querySelector(`[data-scroll="${sectionId}"]`);
                    
                    if (section && navLink) {
                        const sectionTop = section.offsetTop;
                        const sectionBottom = sectionTop + section.offsetHeight;
                        
                        if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                            // Remove active class from all nav links
                            document.querySelectorAll('[data-scroll]').forEach(link => {
                                link.classList.remove('text-primary', 'bg-accent');
                                link.classList.add('text-muted-foreground');
                            });
                            
                            // Add active class to current nav link
                            navLink.classList.remove('text-muted-foreground');
                            navLink.classList.add('text-primary', 'bg-accent');
                        }
                    }
                });
            }

            window.addEventListener('scroll', updateActiveSection);
            updateActiveSection(); // Initial call
        });

        // Contact form functionality
        function handleContactSubmit(event) {
            event.preventDefault();
            
            const submitBtn = document.getElementById('submit-btn');
            const form = event.target;
            
            // Show loading state
            submitBtn.innerHTML = '<div class="animate-spin rounded-full h-4 w-4 border-b-2 border-primary-foreground mr-2"></div>Sending...';
            submitBtn.disabled = true;
            
            // Simulate form submission
            setTimeout(() => {
                submitBtn.innerHTML = '<svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Message Sent!';
                
                // Reset form after delay
                setTimeout(() => {
                    form.reset();
                    submitBtn.innerHTML = '<svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>Send Message';
                    submitBtn.disabled = false;
                    alert('Message sent successfully! I\'ll get back to you soon.');
                }, 3000);
            }, 2000);
        }
    </script>
</body>
</html>