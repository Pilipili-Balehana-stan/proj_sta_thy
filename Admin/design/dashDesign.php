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
<!-- Main -->
<main class="main-container">
    <h1 class="main-title">Tableau de bord</h1>

    <!-- CARD -->
    <div class="insights">
        <div class="card">
            <div class="card-container">
                <div class="card-header">
                    <span class="material-icons-sharp">
                        bar_chart
                    </span>
                </div>
                <div class="card-body">
                    <div class="card-info">
                        <h3>Images</h3>
                        <h1>2.03M</h1>
                    </div>

                    <div class="card-progress">
                        <svg width="96" height="96">
                            <circle id="circle1" cx="38" cy="38" r="36" class="stroke-yellow"></circle>
                        </svg>
                        <div class="percentage">
                            <p>17%</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <small>Sur les 48H precedentes</small>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-container">
                <div class="card-header">
                    <span class="material-icons-sharp">
                        add_shopping_cart
                    </span>
                </div>
                <div class="card-body">
                    <div class="card-info">
                        <h3>Localisation</h3>
                        <h1>780</h1>
                    </div>

                    <div class="card-progress">
                        <svg width="96" height="96">
                            <circle id="circle2" cx="38" cy="38" r="36" class="stroke-fuscha"></circle>
                        </svg>
                        <div class="percentage">
                            <p>72%</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <small>Sur les 48H precedentes</small>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-container">
                <div class="card-header">
                    <span class="material-icons-sharp">
                        group_add
                    </span>
                </div>
                <div class="card-body">
                    <div class="card-info">
                        <h3>Reservation</h3>
                        <h1>21</h1>
                    </div>

                    <div class="card-progress">
                        <svg width="96" height="96" class="stroke-cyan">
                            <circle id="circle3" cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>43%</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <small>Sur les 48H precedentes</small>
                </div>
            </div>
        </div>
    </div>

    <!-- RECENT ORDERS -->
    <section class="recent-orders">
        <div class="ro-title">
            <h2 class="recent-orders-title">Commandes recentes</h2>
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