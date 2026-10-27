<?php

include("connect.php");

/* =========================================
   DASHBOARD STATISTICS
========================================= */

/* PRINCIPAL COUNT */
$doctor_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM doctor"
);

$doctor_data = mysqli_fetch_assoc($doctor_result);
$total_doctor = $doctor_data['total'];


/* TEACHER COUNT */
$nurse_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM nurse"
);

$nurse_data = mysqli_fetch_assoc($nurse_result);
$total_nurse = $nurse_data['total'];


/* STUDENT COUNT */
$reception_result = mysqli_query(
    $db_con,
    "SELECT COUNT(*) AS total FROM reception"
);

$reception_data = mysqli_fetch_assoc($reception_result);
$total_reception = $reception_data['total'];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>AL-RAYAN HOSPITAL | Dashboard</title>

    <link
        rel="stylesheet"
        href="css/styles.css"
    >

</head>


<body>


<!-- =========================================
     NAVIGATION
========================================= -->

 <?php include("includes/header.php")?>


<!-- =========================================
     MAIN DASHBOARD
========================================= -->

<main class="dashboard">


    <!-- =====================================
         DASHBOARD HEADER
    ====================================== -->

    <section class="dashboard-header">

        <div>

            <h1>
                Hospital Management System
            </h1>

            <p>
                Welcome to the AL-RAYAN HOSPITAL dashboard.
            </p>

        </div>

    </section>



    <!-- =====================================
         STATISTICS CARDS
    ====================================== -->

    <section class="stats">


        <!-- principal -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128100;
            </div>


            <div>

                <h3>
                    doctor
                </h3>

                <p>
                    <?php echo $total_doctor; ?>
                </p>

            </div>

        </div>



        <!-- teacher -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128188;
            </div>


            <div>

                <h3>
                    nurse
                </h3>

                <p>
                    <?php echo $total_nurse; ?>
                </p>

            </div>

        </div>



        <!-- student -->

        <div class="stat-card">

            <div class="stat-icon">
                &#128272;
            </div>


            <div>

                <h3>
                    reception
                </h3>

                <p>
                    <?php echo $total_reception; ?>
                </p>

            </div>

        </div>


    </section>



    <!-- =====================================
         QUICK ACTIONS
    ====================================== -->

    <section class="quick-section">

        <h2>
            Quick Actions
        </h2>


        <div class="quick-actions">


            <!-- principal -->

            <a
                href="viewdoctor.php"
                class="action-card"
            >

                <span>
                    &#128100;
                </span>

                <h3>
                    doctor
                </h3>

                <p>
                    Add, edit, view and delete principal.
                </p>

            </a>



            <!-- teacher -->

            <a
                href="viewnurse.php"
                class="action-card"
            >

                <span>
                    &#128188;
                </span>

                <h3>
                    nurse
                </h3>

                <p>
                    AL-AMIN teacher records.
                </p>

            </a>



            <!-- student -->

            <a
                href="viewreception.php"
                class="action-card"
            >

                <span>
                    &#128272;
                </span>

                <h3>
                    reception
                </h3>

                <p>
                    student records.
                </p>

            </a>


        </div>

    </section>


</main>



<!-- =========================================
     FOOTER
========================================= -->

 <?php include("includes/footer.php")?>


</body>

</html>