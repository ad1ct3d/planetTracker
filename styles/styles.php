<style>
/*     :root {
        color-scheme: light dark;
    } */

    body {
        display: grid;
        place-content: center;
    }

    main {
        background-color: darkblue ;
        padding-left: 5rem;
        padding-right: 5rem;
        background-color: #36455c;
    }

    .header {
        display: grid;
        place-content: center;
    }

    .logo {
        display: grid;
        place-content: center;
    }

    .PTSubTitle {
        color: yellow;
        display: grid; 
        place-content: center;
    }

    .cards_container {
        margin-right: 5%;
        margin-left: 5%;
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .planet_card {
    color: whitesmoke;
    border-radius: 2%;
    height: 15rem;
    width: 15rem;
    background-color: brown;
    padding: 1rem;
    margin: 1rem;
    display: grid;
    place-content: center;
    border: 2px solid white;
    /* transition */
    transition: scale 0.5s,
                box-shadow 0.5s,
                -webkit-box-shadow 0.5s,
                -moz-box-shadow 0.5s;
    }

    .planet_card:hover {
        scale: 1.1;
        -webkit-box-shadow:0px 0px 28px 0px rgba(255,46,46,0.9);
        -moz-box-shadow: 0px 0px 28px 0px rgba(255,46,46,0.9);
        box-shadow: 0px 0px 28px 0px rgba(255,46,46,0.9);

    }

    .terminids {
        background-color: hsla(54, 69%, 32%, 1);
        justify-content: flex-start;
        border-color: yellow;


    }

    .terminids:hover {
        -webkit-box-shadow:0px 0px 28px 0px rgba(248,255,46,0.9);
        -moz-box-shadow: 0px 0px 28px 0px rgba(248,255,46,0.9);
        box-shadow: 0px 0px 28px 0px rgba(248,255,46,0.9);
    }

    .automatons {
        background-color: hsla(2, 72%, 31%, 1);
        justify-content: flex-start;
        border-color: red;
        order: 1;
    }

    

</style>