<?php if (!defined("__TYPECHO_ROOT_DIR__")) {
  exit();
} ?>

<div class="flex flex-col lg:mb-16 py-3   dark:dark:text-gray-500"">
    <div class="flex flex-col items-center">
        <div class="flex flex-row gap-x-1 items-center footer">
            <iconify-icon icon="tabler:copyright" class="text-gray-800 dark:dark:text-gray-400""></iconify-icon>
            <span><?php echo getCopyrightDate(); ?> <?php $this->options->title(); ?>. All Rights Reserved.</span>
        </div>
        <span>Theme <a href="https://github.com/liaocp666/Jasmine" title="Jasmine" target="_blank">Jasmine</a> by <a href="https://www.liaocp.cn/" title="Kent Liao" target="_blank">Kent Liao</a></span>

            <?php if ($this->options->icpCode): ?>
                <li class="flex flex-row items-center gap-x-2">
                    <span class="text-sm "><a href="https://beian.miit.gov.cn/" target="_blank"><?php $this->options->icpCode(); ?></a></span>
                </li>
            <?php endif; ?>

    </div>
</div>
<?php $this->footer(); ?>
<script>
    <?php $this->options->customScript(); ?>
</script>
