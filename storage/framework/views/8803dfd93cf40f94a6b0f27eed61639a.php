<?php $__env->startSection('title', 'Home Page'); ?>

<?php $__env->startSection('content'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/furniture.css')); ?>">


    <section class="hero-section" style="margin: 0;">
        <div class="content" style="margin: 0;">
            <h1>Our manufactured is from natural wood & steel.</h1>
            <p>Offer quality products, ensure customer satisfaction, and diverse furniture products.</p>
            <button class="learn-button">Learn More</button>
        </div>
        <div class="hero-image">
            <img src="<?php echo e(asset('assets/images/bedroom.jpg')); ?>" alt="Bedroom">
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="feature">
            <h3>Eco-Friendly Materials</h3>
            <p>Using sustainably sourced wood.</p>
        </div>
        <div class="feature">
            <h3>Handcrafted</h3>
            <p>Made with hand .</p>
        </div>
        <div class="feature">
            <h3>Durable</h3>
            <p>Built to last a lifetime.</p>
        </div>
        <div class="feature">
            <h3>Modern Design</h3>
            <p>Aesthetically pleasing and functional.</p>
        </div>
    </section>

    <!-- Product Gallery Section -->
    <section class="product-gallery">
        <h2> Categories</h2>
        <div class="product-grid">
            <div class="product-item">
                <img src="<?php echo e(asset('assets/images/bedroom1.jpg')); ?>" alt="Bedroom">
                <div class="overlay-text">Bedroom</div>
            </div>
            <div class="product-item">
                <img src="<?php echo e(asset('assets/images/dinning.jpg')); ?>" alt="Dinning Room">
                <div class="overlay-text">Dining Room</div>
            </div>
            <div class="product-item">
                <img src="<?php echo e(asset('assets/images/livingroom.jpg')); ?>" alt="Living Room">
                <div class="overlay-text">Living Room</div>
            </div>
            <div class="product-item">
                <img src="<?php echo e(asset('assets/images/office.jpg')); ?>" alt="Office">
                <div class="overlay-text">Office</div>
            </div>
            <div class="product-item">
                <img src="<?php echo e(asset('assets/images/tables.jpg')); ?>" alt="Living Room">
                <div class="overlay-text">Tables</div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\OMFurniture\furniture-project\resources\views/home.blade.php ENDPATH**/ ?>