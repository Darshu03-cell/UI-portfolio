<?php
$contactInfo = [
    [
        "icon" => "mail",
        "label" => "Email",
        "value" => "iamdarshanhd03@gmail.com",
        "href" => "mailto:iamdarshanhd03@gmail.com"
    ],
    [
        "icon" => "phone",
        "label" => "Phone", 
        "value" => "+91-9945747345",
        "href" => "tel:080-9945747345"
    ],
    [
        "icon" => "map-pin",
        "label" => "Location",
        "value" => "Hassan,Karnataka, India",
        "href" => "#"
    ]
];

$socialLinks = [
    [
        "icon" => "linkedin",
        "label" => "LinkedIn",
        "href" => "https://www.linkedin.com/in/darshan-h-d-315455315/"
    ],
    [
        "icon" => "WhatsApp", 
        "label" => "WhatsApp",
        "href" => "https://web.whatsapp.com/send?phone=919945747345"
    ],
    [
        "icon" => "Projects",
        "label" => "Projects", 
        "href" => "https://dribbble.com/sarahchen"
    ]
];

function getContactIconSvg($iconName) {
    $icons = [
        "mail" => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>',
        "phone" => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>',
        "map-pin" => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>',
        "linkedin" => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path><circle cx="4" cy="4" r="2"></circle>',
        "twitter" => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>',
        "dribbble" => '<circle cx="12" cy="12" r="10"></circle><path d="m8.56 2.75 4.37 6.03a4.5 4.5 0 001.96.64l2.52-7.34"></path><path d="m19.13 5.09-.35 8.28a4.5 4.5 0 01-1.64 1.96l-7.34-2.52"></path><path d="m21.25 15.44-6.03-4.37a4.5 4.5 0 01-.64-1.96l7.34-2.52"></path>'
    ];
    return $icons[$iconName] ?? '';
}
?>

<section id="contact" class="py-24 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-transparent border border-border text-foreground mb-4">
                Contact
            </span>
            <h2 class="text-3xl sm:text-4xl mb-6">
                Let's Work Together
                <span class="block text-muted-foreground">Get In Touch</span>
            </h2>
            <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                Have a project in mind? I'd love to hear about it. 
                Let's discuss how we can create something amazing together.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="bg-card text-card-foreground rounded-lg border shadow-sm p-8">
                <h3 class="text-xl mb-6">Send Me a Message</h3>
                
                <form onsubmit="handleContactSubmit(event)" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-foreground">Name</label>
                            <input 
                                type="text"
                                id="name"
                                name="name"
                                required
                                class="mt-1 block w-full px-3 py-2 border border-border rounded-md shadow-sm bg-input-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring"
                            />
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-foreground">Email</label>
                            <input 
                                type="email"
                                id="email"
                                name="email"
                                required
                                class="mt-1 block w-full px-3 py-2 border border-border rounded-md shadow-sm bg-input-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring"
                            />
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-foreground">Subject</label>
                        <input 
                            type="text"
                            id="subject"
                            name="subject"
                            required
                            class="mt-1 block w-full px-3 py-2 border border-border rounded-md shadow-sm bg-input-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring"
                        />
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-foreground">Message</label>
                        <textarea 
                            id="message"
                            name="message"
                            rows="5"
                            required
                            class="mt-1 block w-full px-3 py-2 border border-border rounded-md shadow-sm bg-input-background text-foreground placeholder-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:border-ring"
                        ></textarea>
                    </div>

                    <button 
                        type="submit" 
                        id="submit-btn"
                        class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-primary-foreground bg-primary hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-ring"
                    >
                        <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        Send Message
                    </button>
                </form>
            </div>

            <div class="space-y-8">
                <div>
                    <h3 class="text-xl mb-6">Get In Touch</h3>
                    <div class="space-y-4">
                        <?php foreach ($contactInfo as $info): ?>
                            <a 
                                href="<?php echo $info['href']; ?>"
                                class="flex items-center p-4 rounded-lg hover:bg-muted/50 transition-colors group"
                            >
                                <svg class="h-5 w-5 text-primary mr-4 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <?php echo getContactIconSvg($info['icon']); ?>
                                </svg>
                                <div>
                                    <p class="font-medium"><?php echo $info['label']; ?></p>
                                    <p class="text-sm text-muted-foreground"><?php echo $info['value']; ?></p>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl mb-6">Follow Me</h3>
                    <div class="flex gap-4">
                        <?php foreach ($socialLinks as $social): ?>
                            <a 
                                href="<?php echo $social['href']; ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center justify-center w-12 h-12 bg-muted rounded-lg hover:bg-primary hover:text-primary-foreground transition-colors group"
                            >
                                <svg class="h-5 w-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <?php echo getContactIconSvg($social['icon']); ?>
                                </svg>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="bg-card text-card-foreground rounded-lg border shadow-sm p-6 bg-gradient-to-br from-primary/5 to-accent/5">
                    <h4 class="font-medium mb-2">Ready to Start a Project?</h4>
                    <p class="text-sm text-muted-foreground mb-4">
                        I'm currently available for new projects and would love to discuss your ideas.
                    </p>
                    <div class="flex items-center gap-2 text-sm text-primary">
                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                        Available for new projects
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>