<?php
use backend\modules\userManagement\components\GhostMenu;
use backend\modules\userManagement\UserManagementModule;
?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">

        <a class="navbar-brand" href="/">Book My Taxi Admin</a>
    </div>
    <!-- /.navbar-header -->


    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <?php
            echo GhostMenu::widget([
                'encodeLabels'=>false,
                'activateParents'=>true,
                'options'=>['class'=>'nav','id'=>'side-menu'],

                'items' => GhostMenu::getAdminMenu()
            ]);
            ?>

        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>