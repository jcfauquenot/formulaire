<!doctype html>
<html lang="fr">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <p>Texte avant le formulaire</p>

        <form method="post" action="traitement.php">

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="name" id="nom" aria-describedby="helpId" placeholder="" required>
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" name="prenom" required>
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            </div>
            <div class="form-group">
                </label for="form-group">Téléphone</label>
                <input type="tel" class="form-control" name="téléphone" id="" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required>
            </div>

            <div class="form-group">
              <label for="">sujet</label>
              <select class="form-control" name="sujet" id="">
                <option>le php c'est bien</option>
                <option>symfony est mon ami</option>
                <option>Fred est un gentil garçon</option>
              </select>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Sauvegarder</button>
        </form>

        <p>Texte après le formulaire</p>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>