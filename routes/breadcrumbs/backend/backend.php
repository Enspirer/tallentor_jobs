<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.module.index', function ($trail) {
    $trail->push('Module Explorer', route('admin.module.index'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';

Breadcrumbs::for('admin.file_manager.index', function ($trail) {
    $trail->push('File Manager', route('admin.file_manager.index'));
});

Breadcrumbs::for('admin.settings.index', function ($trail) {
    $trail->push('General Settings', route('admin.settings.index'));
});

Breadcrumbs::for('admin.about_us', function ($trail) {
    $trail->push('About Us', route('admin.about_us'));
});

Breadcrumbs::for('admin.privacy_policy', function ($trail) {
    $trail->push('Privacy Policy', route('admin.privacy_policy'));
});

Breadcrumbs::for('admin.terms_and_conditions', function ($trail) {
    $trail->push('Terms and Conditions', route('admin.terms_and_conditions'));
});

Breadcrumbs::for('admin.contactus_thanks', function ($trail) {
    $trail->push('Contact Us Thanks Email', route('admin.contactus_thanks'));
});

Breadcrumbs::for('admin.contact_us.index', function ($trail) {
    $trail->push('Contact Us', route('admin.contact_us.index'));
});
Breadcrumbs::for('admin.contact_us.edit', function ($trail) {
    $trail->push('Edit Contact Us', route('admin.contact_us.edit',1));
});

Breadcrumbs::for('admin.job_posts.index', function ($trail) {
    $trail->push('Job Post', route('admin.job_posts.index'));
});
Breadcrumbs::for('admin.job_posts.edit', function ($trail) {
    $trail->push('Edit Job Post', route('admin.job_posts.edit',1));
});

Breadcrumbs::for('admin.job_category.index', function ($trail) {
    $trail->push('Job Category', route('admin.job_category.index'));
});
Breadcrumbs::for('admin.job_category.create', function ($trail) {
    $trail->push('Job Category', route('admin.job_category.create'));
});
Breadcrumbs::for('admin.job_category.edit', function ($trail) {
    $trail->push('Edit Job Category', route('admin.job_category.edit',1));
});

Breadcrumbs::for('admin.skills.index', function ($trail) {
    $trail->push('Skills', route('admin.skills.index'));
});
Breadcrumbs::for('admin.skills.create', function ($trail) {
    $trail->push('Create Skills', route('admin.skills.create'));
});
Breadcrumbs::for('admin.skills.edit', function ($trail) {
    $trail->push('Edit Skills', route('admin.skills.edit',1));
});
