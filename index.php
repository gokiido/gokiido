<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Project: Blog</title>
        <style>
            body { color:green; background-color:rgb(225, 255, 0);font-style:oblique; font-family:sans-serif; font-weight:700; font-size:19px;}
            #going{color:rgb(0, 0, 0); text-decoration:underline;}
            #note{background-color:rgb(255, 255, 255);}
        </style>
    
    </head>
    <body>
        
        <h1>Göktay's blog</h1>
        <a href="#meyra">Meyra kitabına gitmek için.</a>
       <br> <a href="#notes">NotesFromUnderground </a>
        <h2>I am going to share with you:</h2>
        <ul id="going">
            <li>Travel tips and photos!</li>
            <li>I share my favorite books and my review about book</li>
            <li>I share you my life and my thinking about everything ı want.
            <li>I share what I find interested things and places.</li>
        </ul>
        <h2>All about me!</h2>
        <p>I was born in İzmir Turkey. I have a older sister and I was grow up in İzmir too. When I was 8 I was going to start basketboll and ı played basketball until covid-19 pandemic days and after that ı left basketball. I really want to be a outhor and programmer. This is my dream. I started to learn code from Khan Academy and so here I am. I really praciate you to read this text.
        

            <form action="index.php" method="get">
            Name: <input type="text" name="name">
            <input type="submit">
        
        <?php   
              echo $_GET["name"]  
                
                
         ?>
       
        
        <h2 id="meyra">Meyra/Sinan Akyüz</h2>
        <h3>About book:</h3>
        

        <p>Kitap Sırp ve Boşnaklar arasında olan 20.yüyılda yaşanmış bir soykırımdan bahsediyor. Okurken bazı sahnelerin gözünüzün önünden geçtiğini göreceksiniz.Bazı sahneler oldukça onur kırıcı ve çok kötü gerçekten. Sırpların Boşnaklara karşı tutumunu anlatan bu kitap oldukça beni etkiledi ancak okumak isteyenlere tavsiyem kitapta geçen bazı bölümlerden etkileneceğinizi söylemek isterim. İyi okumalar... </p>
        <h2 id="notes"><br>Notes from Underground/Fyodor Dostoyevski</h2>
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/b3/Notes_from_underground_cover.jpg" height="191">
        <p id="note">The "underground" of the mind is the treacherous terrain into which Dostoevsky here delves deep, exposing its most buried fears and desires. The novel was first published in Russia in 1864 and this excellent Canongate Canons edition has an enlightening and entertaining introduction by DBC Pierre assessing "the scale of this little book" and elucidating how "Dostoevsky dropped a pill into the middle of the 19th century and the thing is still fizzing: existentialism".

What makes a book a classic? DBC Pierre explores how, in capturing the "curious machinations of the mind", Dostoevsky (an author "as sensitive as a synapse") is distinct from Russian novelists hitherto more concerned with action: "He was a psychologist before psychology existed, and his observations were acute and universal". This novel still resonates, too, because the themes addressed are "the seedlings of the themes of our day – industrialism, utopianism, western markets, the grip of science and technology on truth".</p>
        <p>If you want more information visit these website and learn more.</p>
        <a href="https://en.wikipedia.org/" >Wikipedia</a>
        <a href="https://www.khanacademy.org/">Khan Academy</a>
        
        
    </body>
</html>
