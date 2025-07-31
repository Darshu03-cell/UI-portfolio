<?php
$projects = [
    [
        "title" => "Mobile App UI Design",
        "category" => "Mobile App Design",
        "description" => "A comprehensive financial management app that helps users track expenses, set budgets, and achieve financial goals.",
        "image" => "https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
        "tags" => ["Mobile app UI Design", "UX Research", "Prototyping"],
        "color" => "from-blue-500/20 to-purple-500/20"
    ],
    [
        "title" => "E-commerce",
        "category" => "Web Platform", 
        "description" => "An eco-friendly marketplace connecting sustainable brands with conscious consumers.",
        "image" => "https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
        "tags" => ["Web Design", "E-commerce", "Design System"],
        "color" => "from-green-500/20 to-teal-500/20"
    ],
    [
        "title" => "MindfulSpace Wellness",
        "category" => "Mobile & Web",
        "description" => "A meditation and wellness platform with guided sessions, progress tracking, and community features.",
        "image" => "https://images.unsplash.com/photo-1545389336-cf090694435e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
        "tags" => ["Cross-platform", "Wellness", "UI Animation"],
        "color" => "from-purple-500/20 to-pink-500/20"
    ],
    [
        "title" => "TaskFlow Productivity",
        "category" => "Web Application",
        "description" => "A project management tool designed for remote teams with real-time collaboration features.",
        "image" => "https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
        "tags" => ["Dashboard Design", "Collaboration", "Data Visualization"],
        "color" => "from-orange-500/20 to-red-500/20"
    ],
    [
        "title" => "LearnHub Education",
        "category" => "EdTech Platform",
        "description" => "An online learning platform with interactive courses, progress tracking, and peer collaboration.",
        "image" => "https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
        "tags" => ["EdTech", "Interactive Design", "Accessibility"],
        "color" => "from-indigo-500/20 to-blue-500/20"
    ],
    [
        "title" => "FoodieConnect Social",
        "category" => "Social Platform",
        "description" => "A social platform for food enthusiasts to share recipes, reviews, and culinary experiences.",
        "image" => "https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80",
        "tags" => ["Social Media", "Content Strategy", "Mobile First"],
        "color" => "from-yellow-500/20 to-orange-500/20"
    ]
];
?>

<section id="portfolio" class="py-24 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-transparent border border-border text-foreground mb-4">
                Portfolio
            </span>
            <h2 class="text-3xl sm:text-4xl mb-6">
                Featured Projects
                <span class="block text-muted-foreground">Crafted with Care</span>
            </h2>
            <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                Here's a selection of projects that showcase my approach to user-centered design, 
                from initial research to final implementation.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($projects as $project): ?>
                <div class="bg-card text-card-foreground rounded-lg border shadow-sm group overflow-hidden hover:shadow-xl transition-all duration-300 h-full">
                    <div class="relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br <?php echo $project['color']; ?> opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <img 
                            src="<?php echo $project['image']; ?>"
                            alt="<?php echo $project['title']; ?>"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-background/80 backdrop-blur-sm text-secondary-foreground">
                                <?php echo $project['category']; ?>
                            </span>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-lg font-medium mb-2 group-hover:text-primary transition-colors">
                            <?php echo $project['title']; ?>
                        </h3>
                        <p class="text-sm text-muted-foreground mb-4 line-clamp-2">
                            <?php echo $project['description']; ?>
                        </p>
                        
                        <div class="flex flex-wrap gap-1 mb-4">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-transparent border border-border text-foreground">
                                    <?php echo $tag; ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                        
                        <button class="w-full inline-flex items-center justify-between px-4 py-2 text-sm font-medium rounded-md text-foreground hover:bg-primary hover:text-primary-foreground transition-colors">
                            View Case Study
                            <svg class="h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
            <button class="inline-flex items-center px-6 py-3 border border-border text-base font-medium rounded-md text-foreground bg-transparent hover:bg-accent">
                <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
                View All Projects
            </button>
        </div>
    </div>
</section>