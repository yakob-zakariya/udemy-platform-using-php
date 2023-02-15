<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>heading</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udemy by HTML</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/general.css">
    <link rel="stylesheet" href="CSS/style.css">
    <style>
        html {
            scroll-behavior: smooth;
        }

        .drop-down {
            position: relative;
        }

        .drop-down-button {
            font-size: 1.8rem;
            font-weight: 500;
            color: #343a40;
            display: flex;
            align-items: center;
            height: 4.8rem;
            margin: 1.2rem 0;
        }


        .place-holder {
            height: 4rem;
        }


        .drop-content {
            position: absolute;
            top: 3.6rem;
            min-width: 20rem;
            z-index: 100;
            /* margin-top: 1rem; */
            display: none;
            transition: display 2s;


        }

        .drop-down-links {
            list-style: none;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            border-right: 1px solid #343a40;


        }

        .drop-down:hover .drop-content {
            display: block;
        }

        /* .place {
            height: 4.2rem;
        } */

        button {
            background: none;
            border: none;
        }

        .categories-link:link,
        .categories-link:visited {
            display: inline-block;
            text-decoration: none;
            font-size: 1.6rem;
            color: #000;
            background-color: #fff;
            width: 100%;
            padding: 8px 16px;
            transition: 1ms;

        }

        .categories-link:hover,
        .categories-link:active {
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            font-size: 1.8rem;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="logo-button">
            <a href="index.php" class="drop-down-link">
                <img width="90" src="image/logo-udemy.svg">
            </a>
        </div>
        <div class="drop-down">
            <button class="drop-down-button">Catagories</button>
            <div class="drop-content">
                <div class="place-holder">
                    &nbsp;
                    <!-- this div is used as place holder in order to increase the mouseover effect area of the dropdwon button area -->
                </div>
                <ul class="drop-down-links">
                    <?php
                    $query = "SELECT * FROM categories";
                    $result = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $cat_title = $row['category_title'];
                    ?>
                        <li><a href="#section_courses" class="categories-link"><?php echo $cat_title ?></a></li>
                    <?php } ?>


                </ul>

            </div>
        </div>
        </div>



        <div class="search-box" style="flex-grow:1;">
            <form action="" method="get" class="form">

                <button class="search-button" type="submit" name="submit">
                    <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
                <input class="search" type="text" name="search" placeholder="Search for anything....">

            </form>
        </div>
        <div class="drop-down-btn hidden">
            <a href="#" class="drop-down-link">Udemy Bussiness</a>
        </div>
        <div class="drop-down-btn">
            <a href="#" class="drop-down-link">Teach on Udemy</a>
        </div>
        <div class="drop-down-btn">
            <a href="#" class="drop-down-link">
                <svg class="cart-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </a>
        </div>
        <div class="drop-down-btn button">
            <a href="index.php?include=log-in" class="btn log-in-btn drop-down-link">
                Log In
            </a>
        </div>
        <div class="drop-down-btn button">
            <a href="index.php?include=sign-up" class="btn sign-up-btn drop-down-link">Sign up</a>
        </div>
        <div class="drop-down-btn">
            <a href="#" class="drop-down-link">
                <svg class="globe-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
            </a>
        </div>
    </header>




</body>

</html>