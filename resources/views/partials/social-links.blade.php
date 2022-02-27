<div class="btn-group" role="group">
    <button type="button" class="btn btn-alt-secondary dropdown-toggle" id="dropdown-blog-story"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-share-alt opacity-50 me-1"></i> Share
    </button>
    <div class="dropdown-menu dropdown-menu-end fs-sm" aria-labelledby="dropdown-blog-story">
        <a class="dropdown-item" href="https://www.facebook.com/sharer.php?u={{ request()->fullUrl() }}&title={{$description}}" target="_blank">
            <i class="fab fa-fw fa-facebook me-1"></i> Facebook
        </a>
        <a class="dropdown-item" href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ $description }}&via=Dashmix&hashtags=Dashmix" target="_blank">
            <i class="fab fa-fw fa-twitter me-1"></i> Twitter
        </a>
        <a class="dropdown-item" href="https://www.linkedin.com/sharing/share-offsite/?url={{ request()->fullUrl() }}" target="_blank">
            <i class="fab fa-fw fa-linkedin me-1"></i> LinkedIn
        </a>
    </div>
</div>
