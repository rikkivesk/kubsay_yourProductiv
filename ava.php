<?php
session_start();
require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>Твой продуктив</title>
    <link rel="stylesheet" href="./scss/reset.css">
    <link rel="stylesheet" href="./scss/register.css">
    <link rel="stylesheet" href="./scss/main.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-flex">
                <h1 class="header-title">
                    Твой продуктив
                </h1>
                <div class="header-coins">
                    <p class="header-coins-count">100</p>
                    <span class="header-coins-span">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 463 463" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 463 463">
                            <g>
                              <path d="M395.195,67.805C351.471,24.08,293.336,0,231.5,0S111.529,24.08,67.805,67.805S0,169.664,0,231.5   s24.08,119.971,67.805,163.695S169.664,463,231.5,463s119.971-24.08,163.695-67.805S463,293.336,463,231.5   S438.92,111.529,395.195,67.805z M384.589,384.589C343.697,425.48,289.329,448,231.5,448s-112.197-22.52-153.089-63.411   C37.52,343.697,15,289.329,15,231.5S37.52,119.303,78.411,78.411C119.303,37.52,173.671,15,231.5,15s112.197,22.52,153.089,63.411   C425.48,119.303,448,173.671,448,231.5S425.48,343.697,384.589,384.589z"/>
                              <path d="m298.535,324.22c0-9.842-3.303-21.983-9.378-35.063 13.08,6.075 25.221,9.377 35.063,9.377 23.589,0 42.78-18.625 42.78-41.52 0-9.307-3.238-18.271-9.07-25.515 5.831-7.244 9.07-16.208 9.07-25.515 0-22.894-19.191-41.52-42.78-41.52-9.842,0-21.983,3.303-35.063,9.377 6.075-13.081 9.378-25.221 9.378-35.063 0-23.589-18.626-42.78-41.521-42.78-9.306,0-18.271,3.239-25.515,9.071-7.243-5.83-16.208-9.069-25.514-9.069-22.895,0-41.521,19.191-41.521,42.78 0,9.842 3.303,21.981 9.378,35.063-13.079-6.075-25.221-9.377-35.063-9.377-23.589,0-42.78,18.625-42.78,41.52 0,9.307 3.239,18.271 9.07,25.515-5.832,7.244-9.07,16.208-9.07,25.515 0,22.894 19.191,41.52 42.78,41.52 9.842,0 21.982-3.303 35.062-9.377-6.074,13.08-9.377,25.221-9.377,35.063 0,23.589 18.626,42.78 41.521,42.78 9.306,0 18.271-3.239 25.515-9.071 7.244,5.832 16.209,9.071 25.515,9.071 22.894-0.002 41.52-19.193 41.52-42.782zm-41.52,27.78c-7.534,0-14.75-3.409-19.798-9.353-1.425-1.678-3.516-2.646-5.717-2.646s-4.292,0.967-5.717,2.646c-5.048,5.944-12.264,9.353-19.798,9.353-14.623,0-26.521-12.462-26.521-27.78 0-12.626 7.686-31.632 20.56-50.839 1.994-2.976 1.605-6.946-0.928-9.479-2.532-2.532-6.503-2.922-9.479-0.927-19.206,12.874-38.211,20.56-50.838,20.56-15.318,0-27.78-11.896-27.78-26.52 0-7.535 3.409-14.751 9.353-19.798 1.678-1.425 2.646-3.516 2.646-5.717s-0.967-4.292-2.646-5.717c-5.943-5.047-9.353-12.264-9.353-19.798 0-14.623 12.462-26.52 27.78-26.52 12.627,0 31.633,7.686 50.839,20.56 2.976,1.995 6.947,1.606 9.479-0.927 2.533-2.533 2.922-6.503 0.928-9.479-12.874-19.208-20.561-38.214-20.561-50.839 0-15.318 11.897-27.78 26.521-27.78 7.534,0 14.75,3.409 19.798,9.353 1.425,1.678 3.516,2.645 5.717,2.645s4.292-0.967 5.717-2.645c5.048-5.944 12.264-9.353 19.798-9.353 14.623,0 26.521,12.462 26.521,27.78 0,12.626-7.687,31.631-20.561,50.839-1.994,2.976-1.605,6.946 0.927,9.479 2.532,2.531 6.502,2.923 9.479,0.927 19.207-12.874 38.212-20.56 50.839-20.56 15.318,0 27.78,11.896 27.78,26.52 0,7.535-3.409,14.751-9.353,19.798-1.679,1.425-2.646,3.515-2.646,5.717s0.968,4.292 2.646,5.717c5.943,5.046 9.353,12.263 9.353,19.798 0,14.623-12.462,26.52-27.78,26.52-12.626,0-31.632-7.686-50.839-20.56-2.975-1.994-6.945-1.607-9.479,0.927-2.532,2.533-2.921,6.503-0.926,9.479 12.874,19.207 20.56,38.212 20.56,50.839-0.001,15.318-11.898,27.78-26.521,27.78z"/>
                              <path d="m319,231.5c0-4.142-3.357-7.5-7.5-7.5h-72.5v-72.5c0-4.142-3.357-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v72.5h-72.5c-4.143,0-7.5,3.358-7.5,7.5s3.357,7.5 7.5,7.5h72.5v72.5c0,4.142 3.357,7.5 7.5,7.5s7.5-3.358 7.5-7.5v-72.5h72.5c4.143,0 7.5-3.358 7.5-7.5z"/>
                              <path d="m246.882,415.368c-10.156,0.839-20.607,0.839-30.764,0-4.108-0.334-7.751,2.728-8.092,6.857-0.341,4.128 2.729,7.751 6.857,8.092 5.487,0.454 11.078,0.683 16.617,0.683s11.13-0.229 16.616-0.683c4.128-0.341 7.198-3.964 6.857-8.092-0.34-4.128-3.968-7.193-8.091-6.857z"/>
                              <path d="m430.316,214.874c-0.342-4.129-3.993-7.186-8.093-6.856-4.128,0.341-7.197,3.965-6.856,8.093 0.42,5.076 0.633,10.254 0.633,15.39 0,5.129-0.213,10.305-0.632,15.383-0.341,4.128 2.729,7.751 6.857,8.092 0.21,0.017 0.418,0.026 0.626,0.026 3.862,0 7.143-2.965 7.466-6.883 0.454-5.489 0.683-11.08 0.683-16.619 0-5.546-0.23-11.14-0.684-16.626z"/>
                              <path d="m216.116,47.632c10.168-0.839 20.6-0.839 30.768,0 0.21,0.017 0.418,0.026 0.625,0.026 3.862,0 7.143-2.966 7.466-6.884 0.341-4.128-2.73-7.75-6.858-8.091-10.984-0.906-22.248-0.906-33.232,0-4.128,0.34-7.199,3.963-6.858,8.091 0.338,4.128 3.974,7.192 8.089,6.858z"/>
                              <path d="m47.632,246.883c-0.419-5.078-0.632-10.254-0.632-15.383s0.213-10.304 0.632-15.381c0.341-4.128-2.729-7.751-6.857-8.092-4.113-0.331-7.751,2.729-8.092,6.857-0.454,5.487-0.683,11.076-0.683,16.616 0,5.539 0.229,11.13 0.683,16.617 0.323,3.918 3.604,6.883 7.466,6.883 0.207,0 0.416-0.009 0.626-0.026 4.127-0.34 7.198-3.963 6.857-8.091z"/>
                              <path d="m112.362,372.392c-3.891-3.298-7.7-6.807-11.323-10.43-3.625-3.625-7.134-7.434-10.43-11.323-2.677-3.16-7.41-3.551-10.57-0.873s-3.551,7.411-0.873,10.571c3.562,4.202 7.352,8.317 11.266,12.231 3.913,3.913 8.028,7.703 12.231,11.266 1.41,1.195 3.132,1.779 4.846,1.779 2.128,0 4.242-0.9 5.726-2.65 2.677-3.16 2.286-7.893-0.873-10.571z"/>
                              <path d="m382.967,349.758c-3.16-2.678-7.894-2.286-10.57,0.874-3.295,3.889-6.807,7.701-10.436,11.33-3.624,3.625-7.435,7.134-11.323,10.43-3.16,2.678-3.551,7.411-0.873,10.571 1.483,1.75 3.598,2.651 5.726,2.651 1.713,0 3.436-0.584 4.846-1.778 4.202-3.562 8.317-7.353 12.232-11.268 3.919-3.919 7.712-8.037 11.271-12.239 2.678-3.161 2.287-7.893-0.873-10.571z"/>
                              <path d="m350.637,90.608c3.89,3.296 7.7,6.806 11.324,10.43 3.625,3.625 7.134,7.436 10.431,11.325 1.484,1.75 3.598,2.65 5.726,2.65 1.714,0 3.437-0.584 4.846-1.779 3.159-2.678 3.55-7.411 0.872-10.571-3.563-4.202-7.353-8.317-11.267-12.232-3.915-3.915-8.03-7.706-12.232-11.267-3.161-2.677-7.894-2.288-10.571,0.873-2.679,3.161-2.288,7.893 0.871,10.571z"/>
                              <path d="m80.037,113.235c1.41,1.195 3.132,1.779 4.846,1.779 2.128,0 4.242-0.9 5.726-2.65 3.297-3.89 6.806-7.7 10.431-11.325 3.623-3.623 7.433-7.132 11.323-10.43 3.159-2.678 3.55-7.411 0.872-10.571-2.68-3.159-7.412-3.549-10.571-0.872-4.203,3.563-8.318,7.353-12.231,11.267-3.914,3.914-7.704,8.03-11.267,12.231-2.679,3.16-2.288,7.893 0.871,10.571z"/>
                              <path d="m316.074,395.486c-4.534,2.332-9.234,4.509-13.969,6.47-4.734,1.961-9.597,3.746-14.453,5.303-3.944,1.265-6.116,5.488-4.851,9.433 1.021,3.183 3.968,5.211 7.14,5.211 0.759,0 1.531-0.116 2.293-0.36 5.246-1.683 10.499-3.61 15.611-5.728 5.113-2.118 10.189-4.469 15.09-6.989 3.684-1.895 5.134-6.416 3.239-10.1-1.894-3.685-6.418-5.134-10.1-3.24z"/>
                              <path d="m401.955,160.895c1.965,4.744 3.749,9.607 5.304,14.454 1.021,3.183 3.968,5.212 7.14,5.212 0.759,0 1.53-0.116 2.292-0.36 3.944-1.265 6.116-5.488 4.852-9.432-1.679-5.237-3.606-10.49-5.728-15.613-2.115-5.108-4.469-10.188-6.993-15.098-1.895-3.684-6.414-5.132-10.1-3.24-3.684,1.894-5.135,6.416-3.24,10.1 2.336,4.544 4.515,9.248 6.473,13.977z"/>
                              <path d="m143.5,68.347c1.154,0 2.326-0.268 3.424-0.832 4.536-2.333 9.236-4.51 13.971-6.471 4.737-1.962 9.601-3.747 14.454-5.303 3.944-1.265 6.116-5.488 4.852-9.432-1.265-3.945-5.491-6.116-9.432-4.851-5.245,1.682-10.498,3.609-15.614,5.728-5.113,2.118-10.189,4.47-15.09,6.989-3.684,1.894-5.135,6.416-3.24,10.1 1.329,2.586 3.954,4.072 6.675,4.072z"/>
                              <path d="m61.045,302.105c-1.962-4.736-3.746-9.599-5.304-14.454-1.266-3.945-5.491-6.114-9.433-4.851-3.944,1.266-6.116,5.489-4.851,9.433 1.683,5.245 3.609,10.497 5.728,15.611 2.118,5.114 4.47,10.191 6.989,15.091 1.33,2.586 3.955,4.071 6.676,4.071 1.155,0 2.327-0.268 3.424-0.832 3.684-1.895 5.135-6.417 3.24-10.1-2.331-4.533-4.509-9.234-6.469-13.969z"/>
                              <path d="m175.348,407.259c-4.856-1.558-9.719-3.342-14.453-5.303-4.734-1.961-9.435-4.138-13.969-6.47-3.681-1.892-8.205-0.445-10.101,3.239-1.895,3.684-0.444,8.205 3.239,10.1 4.9,2.52 9.977,4.872 15.09,6.989 5.112,2.118 10.365,4.045 15.611,5.728 0.762,0.244 1.533,0.36 2.293,0.36 3.172,0 6.119-2.029 7.14-5.211 1.266-3.944-0.906-8.167-4.85-9.432z"/>
                              <path d="m416.694,282.792c-3.942-1.265-8.166,0.906-9.433,4.85-1.563,4.87-3.348,9.735-5.307,14.463-1.96,4.735-4.138,9.435-6.47,13.97-1.895,3.684-0.443,8.206 3.24,10.1 1.098,0.564 2.269,0.832 3.424,0.832 2.721,0 5.346-1.485 6.676-4.071 2.52-4.9 4.871-9.978 6.988-15.09 2.115-5.105 4.044-10.361 5.731-15.621 1.268-3.944-0.904-8.167-4.849-9.433z"/>
                              <path d="m287.651,55.741c4.854,1.557 9.717,3.341 14.454,5.303 4.734,1.961 9.435,4.138 13.971,6.471 1.098,0.564 2.269,0.832 3.424,0.832 2.721,0 5.346-1.485 6.676-4.072 1.895-3.684 0.443-8.206-3.24-10.1-4.9-2.52-9.977-4.871-15.09-6.989-5.116-2.119-10.369-4.046-15.614-5.728-3.939-1.264-8.167,0.907-9.432,4.851s0.907,8.168 4.851,9.432z"/>
                              <path d="m64.274,136.825c-3.682-1.893-8.204-0.444-10.1,3.24-2.52,4.901-4.871,9.978-6.989,15.09-2.121,5.123-4.049,10.375-5.728,15.613-1.265,3.944 0.907,8.167 4.852,9.432 0.762,0.244 1.533,0.36 2.292,0.36 3.172,0 6.119-2.029 7.14-5.212 1.555-4.847 3.339-9.709 5.304-14.454 1.96-4.733 4.137-9.434 6.47-13.969 1.894-3.683 0.443-8.205-3.241-10.1z"/>
                            </g>
                          </svg>
                    </span>
                </div>
            </div>
        </div>
    </header>
    <main>
        <form class="main-form">
            <img class="main-form-img" src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
            <h2 style="margin: 10px 0;"><?= $_SESSION['user']['login'] ?></h2>
            <a href="#"><?= $_SESSION['user']['email'] ?></a>
            <a href="vendor/logout.php" class="logout">Выход</a>
        </form>
        <div class="rating">
            <h2 class="rating-title">Рейтинг пользователей</h2>
            <?php
            // вывод пользователей до 10 штук
            $result = mysqli_query($connect, "SELECT login, avatar FROM `users` LIMIT 3");
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($rows as $row) {
                ?>
                <img class="rating-img"src="<?=$row['avatar']?>"><?=$row['login'];

            }

            ?>
        </div>
        <div class="rating-more">
                Ещё
            </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-flexs">
                <div class="footer-flex item">
                    <a href="#" class="footer-flex-link">
                        <div class="footer-flex-span">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 489.4 489.4" style="enable-background:new 0 0 489.4 489.4;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M347.7,263.75h-66.5c-18.2,0-33,14.8-33,33v51c0,18.2,14.8,33,33,33h66.5c18.2,0,33-14.8,33-33v-51
                                        C380.7,278.55,365.9,263.75,347.7,263.75z M356.7,347.75c0,5-4.1,9-9,9h-66.5c-5,0-9-4.1-9-9v-51c0-5,4.1-9,9-9h66.5
                                        c5,0,9,4.1,9,9V347.75z"/>
                                    <path d="M489.4,171.05c0-2.1-0.5-4.1-1.6-5.9l-72.8-128c-2.1-3.7-6.1-6.1-10.4-6.1H84.7c-4.3,0-8.3,2.3-10.4,6.1l-72.7,128
                                        c-1,1.8-1.6,3.8-1.6,5.9c0,28.7,17.3,53.3,42,64.2v211.1c0,6.6,5.4,12,12,12h66.3c0.1,0,0.2,0,0.3,0h93c0.1,0,0.2,0,0.3,0h221.4
                                        c6.6,0,12-5.4,12-12v-209.6c0-0.5,0-0.9-0.1-1.3C472,224.55,489.4,199.85,489.4,171.05z M91.7,55.15h305.9l56.9,100.1H34.9
                                        L91.7,55.15z M348.3,179.15c-3.8,21.6-22.7,38-45.4,38c-22.7,0-41.6-16.4-45.4-38H348.3z M232,179.15c-3.8,21.6-22.7,38-45.4,38
                                        s-41.6-16.4-45.5-38H232z M24.8,179.15h90.9c-3.8,21.6-22.8,38-45.5,38C47.5,217.25,28.6,200.75,24.8,179.15z M201.6,434.35h-69
                                        v-129.5c0-9.4,7.6-17.1,17.1-17.1h34.9c9.4,0,17.1,7.6,17.1,17.1v129.5H201.6z M423.3,434.35H225.6v-129.5
                                        c0-22.6-18.4-41.1-41.1-41.1h-34.9c-22.6,0-41.1,18.4-41.1,41.1v129.6H66v-193.3c1.4,0.1,2.8,0.1,4.2,0.1
                                        c24.2,0,45.6-12.3,58.2-31c12.6,18.7,34,31,58.2,31s45.5-12.3,58.2-31c12.6,18.7,34,31,58.1,31c24.2,0,45.5-12.3,58.1-31
                                        c12.6,18.7,34,31,58.2,31c1.4,0,2.7-0.1,4.1-0.1L423.3,434.35L423.3,434.35z M419.2,217.25c-22.7,0-41.6-16.4-45.4-38h90.9
                                        C460.8,200.75,441.9,217.25,419.2,217.25z"/>
                                </g>
                            </g>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="footer-flex item">
                    <a href="index.php" class="footer-flex-link">
                        main
                    </a>
                </div>
                <div class="footer-flex item --active">
                    <a href="ava.html" class="footer-flex-link">
                        <span class="footer-flex-span">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 482.9 482.9" style="enable-background:new 0 0 482.9 482.9;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M239.7,260.2c0.5,0,1,0,1.6,0c0.2,0,0.4,0,0.6,0c0.3,0,0.7,0,1,0c29.3-0.5,53-10.8,70.5-30.5
                                        c38.5-43.4,32.1-117.8,31.4-124.9c-2.5-53.3-27.7-78.8-48.5-90.7C280.8,5.2,262.7,0.4,242.5,0h-0.7c-0.1,0-0.3,0-0.4,0h-0.6
                                        c-11.1,0-32.9,1.8-53.8,13.7c-21,11.9-46.6,37.4-49.1,91.1c-0.7,7.1-7.1,81.5,31.4,124.9C186.7,249.4,210.4,259.7,239.7,260.2z
                                        M164.6,107.3c0-0.3,0.1-0.6,0.1-0.8c3.3-71.7,54.2-79.4,76-79.4h0.4c0.2,0,0.5,0,0.8,0c27,0.6,72.9,11.6,76,79.4
                                        c0,0.3,0,0.6,0.1,0.8c0.1,0.7,7.1,68.7-24.7,104.5c-12.6,14.2-29.4,21.2-51.5,21.4c-0.2,0-0.3,0-0.5,0l0,0c-0.2,0-0.3,0-0.5,0
                                        c-22-0.2-38.9-7.2-51.4-21.4C157.7,176.2,164.5,107.9,164.6,107.3z"/>
                                    <path d="M446.8,383.6c0-0.1,0-0.2,0-0.3c0-0.8-0.1-1.6-0.1-2.5c-0.6-19.8-1.9-66.1-45.3-80.9c-0.3-0.1-0.7-0.2-1-0.3
                                        c-45.1-11.5-82.6-37.5-83-37.8c-6.1-4.3-14.5-2.8-18.8,3.3c-4.3,6.1-2.8,14.5,3.3,18.8c1.7,1.2,41.5,28.9,91.3,41.7
                                        c23.3,8.3,25.9,33.2,26.6,56c0,0.9,0,1.7,0.1,2.5c0.1,9-0.5,22.9-2.1,30.9c-16.2,9.2-79.7,41-176.3,41
                                        c-96.2,0-160.1-31.9-176.4-41.1c-1.6-8-2.3-21.9-2.1-30.9c0-0.8,0.1-1.6,0.1-2.5c0.7-22.8,3.3-47.7,26.6-56
                                        c49.8-12.8,89.6-40.6,91.3-41.7c6.1-4.3,7.6-12.7,3.3-18.8c-4.3-6.1-12.7-7.6-18.8-3.3c-0.4,0.3-37.7,26.3-83,37.8
                                        c-0.4,0.1-0.7,0.2-1,0.3c-43.4,14.9-44.7,61.2-45.3,80.9c0,0.9,0,1.7-0.1,2.5c0,0.1,0,0.2,0,0.3c-0.1,5.2-0.2,31.9,5.1,45.3
                                        c1,2.6,2.8,4.8,5.2,6.3c3,2,74.9,47.8,195.2,47.8s192.2-45.9,195.2-47.8c2.3-1.5,4.2-3.7,5.2-6.3
                                        C447,415.5,446.9,388.8,446.8,383.6z"/>
                                </g>
                            </g>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        //Кнопка еще
        const ratingMore = document.querySelector('.rating-more')
        ratingMore.onclick = function(){
            ratingMore.parentNode.querySelector('.rating').classList.add('--active')
            <?php $result = mysqli_query($connect, "SELECT login, avatar FROM `users` LIMIT 5");?>
            
        }
    </script>
    <script src="./js/tabs.js"></script>
    <script src="./js/timer.js"></script>
    <script src="./js/list.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>