
<!DOCTYPE html>
<html lang="en">
<?= $this->include('admin/layout/partials/temp_head'); ?>

<body>
  <div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <!-- include navbar -->
        <?= $this->include('admin/layout/partials/temp_navbar'); ?>
        <!-- include sidebar -->
        <?= $this->include('admin/layout/partials/temp_sidebar'); ?>

      <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <?= $this->renderSection('content-header'); ?>
                <?= $this->renderSection('content'); ?>
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
            Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
            </div>
            <div class="footer-right">
            2.3.0
            </div>
        </footer>
    </div>
  </div>

  <?= $this->include('admin/layout/partials/temp_script'); ?>
</body>
</html>
