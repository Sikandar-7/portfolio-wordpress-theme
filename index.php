<?php get_header(); ?>

<!-- ===========================
     HERO SECTION
     =========================== -->
<section class="hero" id="hero">
    <div class="container">
        <div class="hero-content">

            <div class="hero-badge">
                👋 Available for Freelance Work &mdash; Lahore, Pakistan
            </div>

            <h1 class="hero-title">
                Hi, I'm <span class="highlight">Sikandar Abbas</span><br>
                WordPress Developer
            </h1>

            <p class="hero-description">
                I build beautiful, fast, and custom WordPress websites &amp; themes.
                From WooCommerce stores to Headless WordPress with Next.js &mdash;
                based in Lahore, Pakistan. 🇵🇰
                I use <strong style="color:var(--primary)">AI &amp; Vibe Coding</strong> to build faster and smarter. 🤖
            </p>

            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">View My Work</a>
                <a href="#contact" class="btn btn-outline">Contact Me</a>
            </div>

        </div>
    </div>
</section>

<!-- ===========================
     SKILLS SECTION
     =========================== -->
<section class="skills-section" id="skills">
    <div class="container">

        <div class="section-header">
            <span class="section-tag">What I Know</span>
            <h2 class="section-title">My <span>Skills</span></h2>
        </div>

        <div class="skills-grid">

            <div class="skill-card" style="border-color: rgba(108,99,255,0.4); background: rgba(108,99,255,0.07);">
                <div class="skill-icon">🤖</div>
                <div class="skill-name">AI / Vibe Coding</div>
                <div class="skill-level">Build Faster with AI Tools</div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">🎨</div>
                <div class="skill-name">WordPress</div>
                <div class="skill-level">Custom Theme Development</div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">🐘</div>
                <div class="skill-name">PHP</div>
                <div class="skill-level">WordPress Backend</div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">🛒</div>
                <div class="skill-name">WooCommerce</div>
                <div class="skill-level">E-Commerce Stores</div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">⚡</div>
                <div class="skill-name">HTML5 / CSS3</div>
                <div class="skill-level">Responsive Design</div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">📜</div>
                <div class="skill-name">JavaScript</div>
                <div class="skill-level">ES6+ &amp; Interactivity</div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">⚛️</div>
                <div class="skill-name">React.js</div>
                <div class="skill-level">Frontend Development</div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">▲</div>
                <div class="skill-name">Next.js</div>
                <div class="skill-level">Headless WordPress</div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">🔌</div>
                <div class="skill-name">REST API</div>
                <div class="skill-level">WP API Integration</div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">🖌️</div>
                <div class="skill-name">Elementor</div>
                <div class="skill-level">Page Builder</div>
            </div>

            <div class="skill-card">
                <div class="skill-icon">🐙</div>
                <div class="skill-name">Git / GitHub</div>
                <div class="skill-level">Version Control</div>
            </div>

        </div>

    </div>
</section>

<!-- ===========================
     PROJECTS SECTION
     =========================== -->
<section class="projects-section" id="projects">
    <div class="container">

        <div class="section-header">
            <span class="section-tag">My Work</span>
            <h2 class="section-title">Recent <span>Projects</span></h2>
        </div>

        <div class="projects-grid">

            <?php
            // Custom Post Type se projects fetch karo
            $projects_query = new WP_Query( array(
                'post_type'      => 'project',
                'posts_per_page' => 6,
                'post_status'    => 'publish',
            ));

            if ( $projects_query->have_posts() ) :
                while ( $projects_query->have_posts() ) : $projects_query->the_post();
                    $tags     = get_post_meta(get_the_ID(), 'project_tags', true);
                    $demo_url = get_post_meta(get_the_ID(), 'project_demo_url', true);
                    $github   = get_post_meta(get_the_ID(), 'project_github', true);
                    $category = get_post_meta(get_the_ID(), 'project_category', true);
                    $tags_arr = $tags ? explode(',', $tags) : ['WordPress'];
?>
                <div class="project-card">
                    <div class="project-image">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                            🛒
                        <?php endif; ?>
                        <?php if($category): ?>
                            <span class="project-cat-badge"><?php echo esc_html($category); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="project-body">
                        <div class="project-tags">
                            <?php foreach(array_slice($tags_arr, 0, 3) as $tag): ?>
                                <span class="project-tag"><?php echo esc_html(trim($tag)); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <h3 class="project-title"><?php the_title(); ?></h3>
                        <p class="project-desc"><?php the_excerpt(); ?></p>
                        <div class="project-links">
                            <?php if($demo_url): ?>
                                <a href="<?php echo esc_url($demo_url); ?>" class="btn btn-primary" target="_blank">🔗 Live Demo</a>
                            <?php endif; ?>
                            <?php if($github): ?>
                                <a href="<?php echo esc_url($github); ?>" class="btn btn-outline" target="_blank">🐙 GitHub</a>
                            <?php endif; ?>
                            <?php if(!$demo_url && !$github): ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Details</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :

            ?>
                <!-- Agar koi project nahi hai to placeholder dikhaao -->
                <div class="project-card">
                    <div class="project-image">🎨</div>
                    <div class="project-body">
                        <div class="project-tags">
                            <span class="project-tag">WordPress</span>
                            <span class="project-tag">Custom Theme</span>
                        </div>
                        <h3 class="project-title">Portfolio Website</h3>
                        <p class="project-desc">A custom WordPress theme built from scratch with modern design and dark mode.</p>
                        <div class="project-links">
                            <a href="#" class="btn btn-primary">View Project</a>
                            <a href="#" class="btn btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">🛒</div>
                    <div class="project-body">
                        <div class="project-tags">
                            <span class="project-tag">WooCommerce</span>
                            <span class="project-tag">E-Commerce</span>
                        </div>
                        <h3 class="project-title">Online Store</h3>
                        <p class="project-desc">A fully functional WooCommerce store with custom product pages and checkout flow.</p>
                        <div class="project-links">
                            <a href="#" class="btn btn-primary">View Project</a>
                            <a href="#" class="btn btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">⚡</div>
                    <div class="project-body">
                        <div class="project-tags">
                            <span class="project-tag">Next.js</span>
                            <span class="project-tag">Headless WP</span>
                        </div>
                        <h3 class="project-title">Headless WordPress Blog</h3>
                        <p class="project-desc">WordPress as a CMS with Next.js frontend using the WordPress REST API.</p>
                        <div class="project-links">
                            <a href="#" class="btn btn-primary">View Project</a>
                            <a href="#" class="btn btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>

            <?php endif; ?>

        </div>

    </div>
</section>

<!-- ===========================
     CONTACT SECTION
     =========================== -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="contact-wrapper">

            <div class="section-header">
                <span class="section-tag">Get In Touch</span>
                <h2 class="section-title">Let's Work <span>Together</span></h2>
            </div>

            <p>
                Looking for a skilled WordPress developer based in Lahore, Pakistan?
                I'm available for freelance projects — let's build something amazing!
            </p>

            <div class="contact-links">
                <a href="mailto:sikandar8sa@gmail.com" class="btn btn-primary">
                    📧 Email Me
                </a>
                <a href="https://wa.me/923197171279" target="_blank" class="btn btn-primary">
                    💬 WhatsApp
                </a>
                <a href="https://github.com/Sikandar-7" target="_blank" class="btn btn-outline">
                    🐙 GitHub
                </a>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>
