<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        h1 {
            font-weight: 900;
            text-transform: uppercase;
            color: #031b4e;
            text-shadow: 5px 5px 1px var(--dark-blue-shadow);
        }

        #container {
            width: 80%;
             left: 10%;
            position: relative;
        }

        ul {
            display: flex;
            gap: 10px;
            list-style: none;
            padding: 0;
        }

        .clnt {
                 border: 1px solid #d1d1d1;
                 width: 100%;
                 height: 100px;
                 padding: 20px;
                 border-radius: 7px;
                 box-shadow: 2px 2px 2px var(--dark-blue-shadow), 2px 3px 3px var(--dark-blue-shadow), 2px 5px 5px var(--dark-blue-shadow), 2px 8px 8px var(--dark-blue-shadow);

        }

        #container[data-animated] {
            overflow: hidden;
        }

        #container[data-animated] #list {
            width: max-content;
            animation: scroll 60s linear infinite;
        }

        @keyframes scroll {
            to {
                translate: calc(-50% - 5px);
            }
        }
    </style>
</head>
<body>
 <section style="padding:40px">  
      <h1 class="text-center" style="text-transform: Capitalize;">Clients</h1>

      <div id="container" data-animated>
        <ul id="list">
            <!-- Replace the li elements with img elements -->
            <img src="img/clients/cian.png" alt="Client 1" class="clnt">
            <img src="img/clients/filtrum.jpg" alt="Client 2" class="clnt">
            <img src="img/clients/fleetguard.png" alt="Client 3" class="clnt">
            <img src="img/clients/shree.png" alt="Client 4" class="clnt">
            <img src="img/clients/suyog.png" alt="Client 5" class="clnt">
            <!-- Duplicate images for continuous scrolling -->
            <img src="img/clients/Tata-Motors.png" alt="Client 1" class="clnt">
            <img src="img/clients/TVS.png" alt="Client 2" class="clnt">
            <img src="img/clients/ulka.jpg" alt="Client 3" class="clnt">
            <img src="img/clients/zoomlion.png" alt="Client 4" class="clnt">
           
        </ul>
    </div>
</section> 
    <script>
        const list = document.querySelector("#list");
        const listContent = Array.from(list.children);

        listContent.forEach(item => {
            const duplicatedItem = item.cloneNode(true);
            duplicatedItem.setAttribute("aria-hidden", true);
            list.appendChild(duplicatedItem);
        });
    </script>
</body>
</html>
