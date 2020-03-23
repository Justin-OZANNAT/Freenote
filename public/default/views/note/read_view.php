<!-- script javascript pour l'affichage de l'utilisateur lorsque l'on passe la souris sur un mot-->
<script src="/public/assets/js/popover.js" type="text/javascript"></script>

<!-- MENU -->
<nav class="navbar navbar-expand-md bg-light navbar-light">
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= WEBSITE_URL ?>">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= WEBSITE_URL ?>account">Compte</a>
            </li>
            <li>
                <a class="nav-link" href="<?= WEBSITE_URL ?>note">Messages</a>
            </li>
        </ul>
    </div>
    <?php if ($note->status): ?>
        <span class="navbar-brand">Ouvert</span> <!-- Indique si la discussion est ouverte ou non -->
        <button type="button" class="btn btn-info"> Fermer</button>
    <?php else: ?>
        <span class="navbar-brand">Fermée</span>
    <?php endif; ?>
</nav>

<div class="container">
    <div class="messaging">
        <div class="inbox_msg">
            <div class="inbox_people">
                <div class="headind_srch">
                    <div class="recent_heading">
                        <h4>Recent</h4>
                    </div>
                </div>
                <div class="inbox_chat">
                    <?php foreach ($note as $value): ?>
                        <div class="chat_list <?= ($value['id'] == $note->id ? 'active_chat' : '') ?>">
                            <div class="chat_people">
                                <div class="chat_ib">
                                    <h5><?= $value['title'] ?> <span class="chat_date"><?= $date ?></span></h5>
                                    <p>Test, which is a new approach to have all solutions
                                        astrology under one roof.</p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="mesgs">
                <div class="msg_history">
                    <div class="incoming_msg">
                        <?php foreach ($messages as $key => $value): ?>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>
                                        <?php foreach ($value['words'] as $key2 => $value2): ?>
                                            <span class="word" data-toggle="popover" title="<?= App::getUserById($value2['_user']) ?>>"><?= $value2['content'] ?></span>
                                        <?php endforeach; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="type_msg">
                        <div class="input_msg_write">
                            <input type="text" class="write_msg" placeholder="Type a message"/>
                            <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- script javascript pour l'affichage de l'utilisateur lorsque l'on passe la souris sur un mot-->
<script src="/public/assets/js/popover.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="/public/assets/css/chat.css" rel="stylesheet">
<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Custom scripts for this template -->
<script src="/public/assets/js/app.min.js"></script>