<?php
include('../includes/header.php');
?>

<div class="head-title">
    <div class="left">
        <ul class="breadcrumb">
            <li>
                <a href="/Admin/design/image design.php">
                    <span>Image</span>
                </a>
            </li>
            <li>
                <span class="material-icons-sharp">
                    chevron_right
                </span>
            </li>
            <li>
                <a href="/Admin/design/maison design.php">
                    <span>Maison</span>
                </a>
            </li>
            <li>
                <span class="material-icons-sharp">
                    chevron_right
                </span>
            </li>
            <li>
                <a href="/Admin/design/reservation design.php">
                    <span>Reservation</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<section class="recent-orders">
    <div class="ro-title">
        <h2 class="recent-orders-title">Localisation</h2>
        <a href="#" class="show-all">Tout afficher</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Adresse</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Maison</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</section>
</main>
<?php
include('../includes/footer.php');
?>