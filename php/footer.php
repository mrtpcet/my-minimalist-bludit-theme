<!-- Pagination -->
<?php if (($url->whereAmI() == 'home') && Paginator::numberOfPages() > 1): ?>
<nav>
    <!-- Previous button -->
    <?php if (Paginator::showPrev()): ?>
        <a class="previous" href="<?php echo Paginator::previousPageUrl() ?>" title="après" tabindex="-1">☼</a>
    <?php else: ?>
        <span class="previous"> </span>
    <?php endif; ?>

    <!-- Next button -->
    <?php if (Paginator::showNext()): ?>
        <a class="next" href="<?php echo Paginator::nextPageUrl() ?>" title="avant" tabindex="-1">☽</a>
    <?php else: ?>
        <span class="next"> </span>
    <?php endif; ?>
</nav>
<br />
<?php endif ?>

