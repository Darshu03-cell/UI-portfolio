<?php
$testimonials = [
    [
        "name" => "Ganesh Sai",
        "position" => "Design Lead",
        "company" => "Knobly COnsulting",
        "content" => "Darshan H D s design work transformed our user experiinterface completely. Her attention to detail and user-centered approach resulted in a 40% increase in user engagement.",
        "rating" => 5,
        "avatar" => "images/WhatsApp Image 2025-07-31 at 3.06.04 PM.jpeg"
    ],
    [
        "name" => "Mohammed Fahad Khan",
        "position" => "Executive Lead",
        "company" => "ME-RIISE FOUNDATION",
        "content" => "Working with Darshan is a good personality for our company.He didn't just design beautiful interfaces, he helped us understand our users better and create meaningful experiences.",
        "rating" => 5,
        "avatar" => "images/fahad.jpeg"
    ],
    [
        "name" => "Arun Reddy",
        "position" => "Senior Product Manager",
        "company" => "Product Manager",
        "content" => "Darshan's design process is incredibly thorough. From research to final implementation, every decision was backed by data and user insights. The results speak for themselves.",
        "rating" => 5,
        "avatar" => "images/arunreddy.jpeg"
    ],
    [
        "name" => "Shreyas Kumar",
        "position" => "Software Developer", 
        "company" => "Knobly COnsulting",
        "content" => "Darshan has an incredible ability to translate complex business requirements into simple, elegant design solutions. Her work elevated our brand and improved our conversion rates significantly.",
        "rating" => 5,
        "avatar" => "images/shreyas.png"
    ]
];

function renderStars($rating) {
    $stars = '';
    for ($i = 1; $i <= 5; $i++) {
        $fillClass = $i <= $rating ? 'text-yellow-400 fill-current' : 'text-muted-foreground';
        $stars .= '<svg class="h-4 w-4 ' . $fillClass . '" fill="' . ($i <= $rating ? 'currentColor' : 'none') . '" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
        </svg>';
    }
    return $stars;
}
?>

<section id="testimonials" class="py-24 px-4 sm:px-6 lg:px-8 bg-muted/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-transparent border border-border text-foreground mb-4">
                Testimonials
            </span>
            <h2 class="text-3xl sm:text-4xl mb-6">
                What Clients Say
                <span class="block text-muted-foreground">About Working With Me</span>
            </h2>
            <p class="text-lg text-muted-foreground max-w-3xl mx-auto">
                I'm grateful to work with amazing clients who trust me to bring their visions to life. 
                Here's what some of them have to say about our collaboration.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($testimonials as $testimonial): ?>
                <div class="bg-card text-card-foreground rounded-lg border shadow-sm p-6 h-full hover:shadow-lg transition-shadow relative">
                    <svg class="absolute top-4 right-4 h-6 w-6 text-muted-foreground/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    
                    <div class="flex items-center mb-4">
                        <img 
                            src="<?php echo $testimonial['avatar']; ?>"
                            alt="<?php echo $testimonial['name']; ?>"
                            class="w-12 h-12 rounded-full object-cover mr-4"
                        />
                        <div>
                            <h4 class="font-medium"><?php echo $testimonial['name']; ?></h4>
                            <p class="text-sm text-muted-foreground">
                                <?php echo $testimonial['position']; ?> at <?php echo $testimonial['company']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="flex mb-4">
                        <?php echo renderStars($testimonial['rating']); ?>
                    </div>

                    <p class="text-sm text-muted-foreground leading-relaxed">
                        "<?php echo $testimonial['content']; ?>"
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center mt-12">
            <div class="inline-flex items-center gap-4 text-muted-foreground">
                <div class="flex">
                    <?php echo renderStars(4.5); ?>
                </div>
                <span class="text-sm">Based on 6+ client reviews</span>
            </div>
        </div>
    </div>
</section>