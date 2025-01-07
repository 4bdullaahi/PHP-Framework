
 <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="./assets/img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong"><?php echo $_SESSION['name'] ?></div><small><?php echo $_SESSION['username'] ?></small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="home.php"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
<?php
require("connection.php");
$sql ="SELECT c.id , c.name, c.icon from category c JOIN forms f ON c.id=f.category_id
JOIN user_form u on u.form_id = f.id and u.ACTION = 'form' where u.user_id = $_SESSION[user_id] Group by c.name";
$ress = $conn->query($sql);
while ($c = $ress->fetch_array()) {
?>

                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon <?php echo $c[2] ?>"></i>
                            <span class="nav-label"><?php echo $c[1] ?></span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
<?php
require("connection.php");
$sq ="SELECT f.id , f.name,f.href from category c JOIN forms f ON c.id=f.category_id
JOIN user_form u on u.form_id = f.id and u.ACTION = 'form' where u.user_id = $_SESSION[user_id] and c.id=$c[id]";
$res = $conn->query($sq);
while ($f = $res->fetch_array()) {
?>
<li>
    <a class="get_form" href="<?php echo $f['href'].'?id='.$f['id']?>"><?php echo $f[1] ?></a>
</li>
<?php
}
?>
                    </ul>
                    </li>
<?php
}
?>
                     </ul>
                </li>

                        </ul>
                    </li>

                </ul>
            </div>
        </nav>