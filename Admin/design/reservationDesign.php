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
                <a href="/Admin/design/maison design.php">
                    <span>Maison</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<section class="recent-orders">
    <div class="ro-title">
        <h2 class="recent-orders-title">Reservations recentes</h2>
        <a href="#" class="show-all">Tout afficher</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Maison</th>
                <th>Image</th>
                <th>Date debut</th>
                <th>Date fin</th>
                <th>Montant</th>
                <th>Etat</th>
                <th>Proprietaire</th>
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