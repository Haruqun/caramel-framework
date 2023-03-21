<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/custom.css">


    <title>Hello, world!</title>
    <script>
        (function(d) {
            var config = {
                    kitId: 'obx8gqk',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <script>
        (function(d) {
            var config = {
                    kitId: 'obx8gqk',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">LapinBOT</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">BOT機能の紹介</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">アルゴリズム</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">利益ロスカット機能</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">お問い合わせ</a></li>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="キーワード検索"
                        aria-label="Search">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2"><i class="bi bi-box-arrow-in-right"></i>
                        ログイン</button>
                    <button type="button" class="btn btn-warning">新規登録</button>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid hero">

        <div class="px-5 pt-5 my-0 text-center border-bottom">
            <h1 class="display-4 fw-bold">BOTによる自動取引で利益を狙う</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    LapinBOTは、安心して利用できる自動ベッドツールです。プレイヤーの負担を軽減し、より効率的なプレイを実現するために開発されました。Lapinbetカジノでのプレイをより楽しく、より収益性の高いものにするために、LapinBOTをぜひご活用ください。
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">
                        <i class="bi bi-bag-fill"></i> 購入手続き
                    </button>
                    <button type="button" class="btn btn-secondary btn-lg px-4"><i
                            class="bi bi-envelope-paper-heart-fill"></i> お問い合わせ</button>
                </div>
            </div>
            <div class="" style="">
                <div class="container px-5">
                    {{-- <img src="https://getbootstrap.com/docs/5.0/examples/heroes/bootstrap-docs.png"
                        class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700"
                        height="500" loading="lazy"> --}}
                    <iframe class="mb-5" width="1080" height="650" src="https://www.youtube.com/embed/Ydwxl1WyUe4"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>

                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">

        <div class="row featurette align-items-center">
            <div class="col-md-12 order-md-2">
                <h1 class="featurette-heading">
                    <i class="bi bi-coin"></i>
                    ロジックに従って自動ベット
                </h1>
                <p class="lead">
                    LapinBOTは、自動ベッドツールとして、Lapinbetカジノで利用できます。<br>
                    様々なアルゴリズムに基づいたベットを行い、現在６種類のベットロジックが収録されています。代表的なマーチンゲール法・ウィナーズ法も使うことができます。
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid gray-bg  py-5">
        <div class="container">
            <div class="row featurette align-items-center">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">
                        ロジックに従って自動ベット
                    </h2>
                    <p class="lead">
                        LapinBOTは、自動ベッドツールとして、Lapinbetカジノで利用できます。<br>
                        様々なアルゴリズムに基づいたベットを行い、現在６種類のベットロジックが収録されています。代表的なマーチンゲール法・ウィナーズ法も使うことができます。
                    </p>
                    <h2 class="featurette-heading">
                        利益を確保するために
                    </h2>
                    <p class="lead">
                        ユニット数を設定することで、自分の好きな枚数から自動ベットを開始することができ、大きな金額でベットを行うことも可能です。さらに、利益確定機能を搭載しているため、指定した利益確定でゲームを終了することができます。ロスカット機能もあるため、所持金が指定した金額に達した段階で自動的にゲームを終了することができます。
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="https://placehold.jp/500x500.png" class="img-fluid border rounded-3 shadow-lg mb-4"
                        alt="Example image" width="500" height="500" loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">

        <div class="container">
            <div class="row featurette align-items-center">
                <div class="col-md-7 order-md-1">
                    <h2 class="featurette-heading">
                        ロジックに従って自動ベット
                    </h2>
                    <p class="lead">
                        LapinBOTは、自動ベッドツールとして、Lapinbetカジノで利用できます。<br>
                        様々なアルゴリズムに基づいたベットを行い、現在６種類のベットロジックが収録されています。代表的なマーチンゲール法・ウィナーズ法も使うことができます。
                    </p>
                    <h2 class="featurette-heading">
                        利益を確保するために
                    </h2>
                    <p class="lead">
                        ユニット数を設定することで、自分の好きな枚数から自動ベットを開始することができ、大きな金額でベットを行うことも可能です。さらに、利益確定機能を搭載しているため、指定した利益確定でゲームを終了することができます。ロスカット機能もあるため、所持金が指定した金額に達した段階で自動的にゲームを終了することができます。
                    </p>
                </div>
                <div class="col-md-5 order-md-2 my-5">
                    <img src="https://placehold.jp/500x500.png" class="img-fluid border rounded-3 shadow-lg mb-4"
                        alt="Example image" width="500" height="500" loading="lazy">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gold-bg py-5">
        <div class="container">

            <div class="row featurette align-items-center">
                <div class="col-md-6">
                    <h2 class="featurette-heading">
                        ロジックに従って自動ベット
                    </h2>
                    <p class="lead">
                        LapinBOTは、自動ベッドツールとして、Lapinbetカジノで利用できます。<br>
                        様々なアルゴリズムに基づいたベットを行い、現在６種類のベットロジックが収録されています。代表的なマーチンゲール法・ウィナーズ法も使うことができます。
                    </p>
                </div>
                <div class="col-md-6">
                    <h2 class="featurette-heading">
                        利益を確保するために
                    </h2>
                    <p class="lead">
                        ユニット数を設定することで、自分の好きな枚数から自動ベットを開始することができ、大きな金額でベットを行うことも可能です。さらに、利益確定機能を搭載しているため、指定した利益確定でゲームを終了することができます。ロスカット機能もあるため、所持金が指定した金額に達した段階で自動的にゲームを終了することができます。
                    </p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
