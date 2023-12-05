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
                <a href="/Admin/design/localisation design.php">
                    <span>Localisation</span>
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
        <h2 class="recent-orders-title">Maison</h2>
        <a href="#" class="show-all">Tout afficher</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Type</th>
                <th>salon</th>
                <th>Chambre</th>
                <th>Salle bain</th>
                <th>Parking</th>
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