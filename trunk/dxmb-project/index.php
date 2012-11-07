<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-gb" dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml">
    <?php include 'head.php'; ?>    
    <body>
        <div id="site_wrapper">
            <!-- Accessibility -->
            <?php include 'modules/header.php'; ?>
            <!-- Header -->
            <!-- Content -->
            <div id="content" class="box-shadow">
                <?php include 'modules/breadcrumbs-bar.php'; ?>
                <div class="content-change">                    
                    <?php include 'modules/processframe.php'; ?>
                </div>
                <div class="clear"></div>
                <?php include 'modules/bottom-links.php'; ?>
            </div>
            <!-- Content -->
            <div class="clear"></div>
            <!-- Footer -->
            <?php include 'modules/footer.php'; ?>
            <!-- Footer -->
        </div>
        <!-- javascript code to make J! tooltips -->
        <script type="text/javascript">
            window.addEvent('domready', function () {
                $$('.hasTip').each(function (el) {
                    var title = el.get('title');
                    if (title) {
                        var parts = title.split('::', 2);
                        el.store('tip:title', parts[0]);
                        el.store('tip:text', parts[1]);
                    }
                });
                var JTooltips = new Tips($$('.hasTip'), {
                    fixed: false
                });
            });
        </script>
    </body>
</html>