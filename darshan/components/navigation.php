<nav class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-md border-b border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <span class="text-xl font-medium">Darshan H D</span>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <button data-scroll="hero" class="px-3 py-2 rounded-md transition-colors text-primary bg-accent">
                        Home
                    </button>
                    <button data-scroll="about" class="px-3 py-2 rounded-md transition-colors text-muted-foreground hover:text-foreground hover:bg-accent">
                        About
                    </button>
                    <button data-scroll="portfolio" class="px-3 py-2 rounded-md transition-colors text-muted-foreground hover:text-foreground hover:bg-accent">
                        Portfolio
                    </button>
                    <button data-scroll="testimonials" class="px-3 py-2 rounded-md transition-colors text-muted-foreground hover:text-foreground hover:bg-accent">
                        Testimonials
                    </button>
                    <button data-scroll="contact" class="px-3 py-2 rounded-md transition-colors text-muted-foreground hover:text-foreground hover:bg-accent">
                        Contact
                    </button>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="inline-flex items-center justify-center p-2 rounded-md text-muted-foreground hover:text-foreground hover:bg-accent">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-background border-t border-border">
                <button data-scroll="hero" class="block px-3 py-2 rounded-md w-full text-left transition-colors text-primary bg-accent">
                    Home
                </button>
                <button data-scroll="about" class="block px-3 py-2 rounded-md w-full text-left transition-colors text-muted-foreground hover:text-foreground hover:bg-accent">
                    About
                </button>
                <button data-scroll="portfolio" class="block px-3 py-2 rounded-md w-full text-left transition-colors text-muted-foreground hover:text-foreground hover:bg-accent">
                    Portfolio
                </button>
                <button data-scroll="testimonials" class="block px-3 py-2 rounded-md w-full text-left transition-colors text-muted-foreground hover:text-foreground hover:bg-accent">
                    Testimonials
                </button>
                <button data-scroll="contact" class="block px-3 py-2 rounded-md w-full text-left transition-colors text-muted-foreground hover:text-foreground hover:bg-accent">
                    Contact
                </button>
            </div>
        </div>
    </div>
</nav>