<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap');

    :root {
        --color-white: #FFFFFF;
        --color-black: #141414;
        --color-gray: #808080;
    }

    html {
        background-color: var(--color-black);
        line-height: 2;
    }

    h1 {
        font-size: 42px;
        font-family: 'Open Sans', sans-serif;
        color: var(--color-white);
        text-align: center;
    }

    p {
        color: var(--color-gray);
        text-align: center;
        text-transform: capitalize;
        font-size: 20px;
        font-family: 'Poppins', sans-serif;
    }

    .profile p {
        margin-top: 1px;
    }

    img {
        height: 35px;
        width: auto;
    }

    .netflix-logo {
        margin-top: 29px;
        margin-left: 25px;
        cursor: pointer;
    }

    .profile-lists {
        margin: 0 auto;
        display: table;
    }

    .profile {
        width: 150px;
        height: 150px;
        /*background-color: var(--color- white);*/
        border-radius: 10px;
        border: 3px solid transparent;
        text-align: center;
        display: inline-block;
        margin-left: 25px;
    }

    .profile-img {
        width: 150px;
        height: 150px;
        border-radius: 8px;
        cursor: pointer;
    }

    .profile:hover {
        border: 3px solid var(--color-white);
    }

    .btn {
        color: var(--color-gray);
        background-color: var(--color-black);
        cursor: pointer;
        border: 2px solid var(--color-gray);
        width: 218px;
        height: 45px;
        letter-spacing: 3px;
        text-transform: uppercase;
        text-align: center;
        margin: 0 auto;
        display: grid;
        place-items: center;
        margin-top: 60px;
    }

    .btn:hover {
        border: 2px solid var(--color-white);
        color: var(--color-white);
    }


    /*  responsive */
    @media (max-width: 900px) {
        .netflix-logo {
            display: grid;
            place-items: center;
            margin: 0 auto;
        }

        .profile-lists {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            row-gap: 90px;
            padding-bottom: 110px;
        }

        .profile {
            margin-top: 3rem;
            column-gap: 6px;
            margin: auto;
        }

        h1 {
            text-align: center;
            font-size: 35px;
            margin-top: 150px;
        }

        .btn {
            display: none;
        }
    }

    @media (max-width: 320px) {
        .netflix-logo {
            display: grid;
            place-items: center;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            font-size: 23px;
            margin-top: 150px;
        }

        .btn {
            display: none;
        }

        .profile-lists {
            display: grid;
            place-items: center;
            padding-bottom: 110px;
            margin: auto;
        }

        .profile {
            margin-top: 3rem;
            margin: auto;
        }
    }
</style>

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">

<div class="netflix-logo">
    <h3 class="font-roboto font-bold text-4xl text-red-700 rounded-lg mt-6">Nandlix</h1>
</div>

<h1>Who's watching?</h1>

<div class="profile-lists" id="klik_buka">
    <div class="profile">
        <img class="profile-img"
            src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTRyBRODHdck7MaW3k7ya-ZLEeKLSYJ4HtIFGocq_23FCiYws8k"
            alt="Netflix Mask Avatar">
        <p>Nanda</p>
    </div>

    <div class="profile" id="klik_buka">
        <img class="profile-img" src="https://avatars.githubusercontent.com/u/26828270?v=4" alt="Netflix Kitty Avatar">
        <p>mum</p>
    </div>

    <div class="profile" id="klik_buka">
        <img class="profile-img" src="https://i.postimg.cc/br2J3S1S/img-png3.png" alt="Netflix Red Avatar">
        <p>dad</p>
    </div>

    <div class="profile" id="klik_buka">
        <img class="profile-img" src="https://i.pinimg.com/736x/55/ba/30/55ba30e8f83d0064ee7669dc203ad1d5.jpg"
            alt="Netflix Stranger Things Avatar">
        <p>Sister</p>
    </div>

    <div class="profile" id="klik_buka">
        <img class="profile-img" src="https://i.postimg.cc/mgVHcMjT/img-png2.png" alt="Netflix Kids Avatar">
        <p>kids</p>
    </div>

    <br> <br>
    <button id="klik_buka" class="btn">manage profiles</button>
</div>
