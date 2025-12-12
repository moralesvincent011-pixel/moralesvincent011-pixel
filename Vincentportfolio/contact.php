<?php
$pageTitle = 'Contact - My Portfolio';
include 'includes/header.php';
?>

<!-- Contact Section -->
<section id="contact" class="contact-section py-5" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title about-title">Contact Me</h2>
                <p class="section-subtitle">Let's get in touch</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-card">
                    <form action="process_contact.php" method="POST" id="contactForm">
                        <div class="mb-4">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100">Send Message</button>
                    </form>
                    <?php if ($formMessage): ?>
                        <div class="mt-3">
                            <div class="alert alert-<?php echo $messageType === 'error' ? 'danger' : 'success'; ?> alert-dismissible fade show" role="alert">
                                <?php echo htmlspecialchars($formMessage); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="contact-info text-center mt-4">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <i class="fas fa-envelope fa-lg mb-2" style="color: var(--ig-accent);"></i>
                            <p class="mb-0">moralesvincent011@gmail.com</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <i class="fas fa-phone fa-lg mb-2" style="color: var(--ig-accent);"></i>
                            <p class="mb-0">09108285162</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <i class="fas fa-map-marker-alt fa-lg mb-2" style="color: var(--ig-accent);"></i>
                            <p class="mb-0">Poblacion, Talibon, Bohol</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
