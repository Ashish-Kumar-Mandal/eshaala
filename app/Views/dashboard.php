<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <spnan style="color:#fff; font-weight:bold;">DASHBOARD</spnan>
                <spnan style="float:right">
                <a href="<?= site_url('profile') ?>" style="color:#fff; font-weight:bold; text-decoration:none;">Profile | </a>
                <a href="<?= site_url('logout') ?>" style="color:#fff; font-weight:bold; text-decoration:none;">Logout</a>
                </spnan>
            </div>
            <div class="panel-body">
                <h1>Hello, <?= session()->get('name') ?></h1>
                <h2>Welcome to Eshaala Portal</h2>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>