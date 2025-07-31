<?php
$skills = [
    "UI/UX Design", "Product Design", "Design Systems", "Prototyping", "User Research",
    "Figma", "Adobe Creative Suite", "Sketch", "Principle", "Framer","photoshop", "Illustrator","After Effects","HTML/CSS","canva"
];

$services = [
    [
        "title" => "Brand Identity",
        "description" => "Creating cohesive visual identities that tell your brand's story",
        "icon" => "palette"
    ],
    [
        "title" => "Mobile Design", 
        "description" => "Designing intuitive mobile experiences for iOS and Android",
        "icon" => "smartphone"
    ],
    [
        "title" => "Web Design",
        "description" => "Crafting responsive web interfaces that work across all devices", 
        "icon" => "monitor"
    ],
    [
        "title" => "User Research",
        "description" => "Understanding user needs through research and testing",
        "icon" => "users"
    ],
    [
        "title" => "Prototyping", 
        "description" => "Building interactive prototypes to validate design decisions",
        "icon" => "zap"
    ],
    [
        "title" => "Design Systems",
        "description" => "Creating scalable design systems for consistent experiences",
        "icon" => "heart"
    ]
];

function getIconSvg($iconName) {
    $icons = [
        "palette" => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM7 3V1m0 20v-2M3 7h4M3 11h4M3 15h4"></path>',
        "smartphone" => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line>',
        "monitor" => '<rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line>',
        "users" => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="m22 21-3-3m0 0a5.5 5.5 0 1 0-7.78-7.78 5.5 5.5 0 0 0 7.78 7.78Z"></path>',
        "zap" => '<polygon points="13,2 3,14 12,14 11,22 21,10 12,10 13,2"></polygon>',
        "heart" => '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>'
    ];
    return $icons[$iconName] ?? '';
}
?>

<section id="about" class="py-24 px-4 sm:px-6 lg:px-8 bg-muted/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-transparent border border-border text-foreground mb-4">
                About Me
            </span>
            <h2 class="text-3xl sm:text-4xl mb-6">
                Passionate About Creating
                <span class="block text-muted-foreground">Meaningful Experiences</span>
            </h2>
            <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                With over 1 years of experience in UI/UX design, I've helped startups and established 
                companies create digital products that users love. My approach combines user research, 
                creative problem-solving, and attention to detail to deliver designs that not only look 
                great but also solve real user problems.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <div>
                <h3 class="text-xl mb-6">My Skills</h3>
                <div class="flex flex-wrap gap-2">
                    <?php foreach ($skills as $skill): ?>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-secondary text-secondary-foreground">
                            <?php echo $skill; ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>

            <div>
                <h3 class="text-xl mb-6">Experience Highlights</h3>
                <div class="space-y-4">
                    <div class="border-l-2 border-muted pl-4">
                        <h4 class="font-medium">UI and Graphic Designer</h4>
                        <p class="text-sm text-muted-foreground">InAmigos Foundation (NGO) • 2025 - 2025</p>
                        <p class="text-sm mt-2">Created digital experiences for various clients across industries and supporting NGO, I helped 4 Months working a Company</p>
                    </div>
                    <div class="border-l-2 border-muted pl-4">
                        <h4 class="font-medium">Designer</h4>
                        <p class="text-sm text-muted-foreground">Skill Craft Technology • 2024 - 2025</p>
                        <p class="text-sm mt-2">Created digital experiences for various clients across industries and supporting NGO, I helped 4 Months working a Company</p>
                    </div>
                    <div class="border-l-2 border-primary pl-4">
                        <h4 class="font-medium">UI Designer</h4>
                        <p class="text-sm text-muted-foreground">Poorna Oils - 2023-2024</p>
                        <p class="text-sm mt-2">Working in a team of two people, Leading a design for mobile app, web products and UI design for this company located in Hassan.</p>
                    </div>
                    <div class="border-l-2 border-muted pl-4">
                        <h4 class="font-medium">Product Designer</h4>
                        <p class="text-sm text-muted-foreground">Sir How? company Banglore • 2022 - 2023</p>
                        <p class="text-sm mt-2">Designed the complete a thumbnails and user experience designs for a Sir How? company</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h3 class="text-xl text-center mb-12">What I Do</h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($services as $service): ?>
                <div class="bg-card text-card-foreground rounded-lg border bg-card text-card-foreground shadow-sm p-6 h-full hover:shadow-lg transition-shadow">
                    <svg class="h-8 w-8 text-primary mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <?php echo getIconSvg($service['icon']); ?>
                    </svg>
                    <h4 class="font-medium mb-3"><?php echo $service['title']; ?></h4>
                    <p class="text-sm text-muted-foreground"><?php echo $service['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>