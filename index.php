<?php
	class indexLangs {
		public function __construct() {
		    if(is_file('./_lib/lang/en_us.lang.php')){
		        include('./_lib/lang/en_us.lang.php');
		    }
		}
		public function getLang(){
		    if(is_file('./_lib/lang/en_us.lang.php')){
                return $this->Nm_lang['lang_pub_index_btn_label'];
		    }else{
                return false;
		    }
		}
	}
	$obj = new indexLangs();
	$str_label = $obj->getLang();
	if($str_label == false){
	    $str_label = "Access home application";
	}
    $str_apl = 'app-login';
    if(is_file("_lib/_app_data/" . $str_apl . '_ini.php'))
    {
        require("_lib/_app_data/" . $str_apl . '_ini.php');
        $str_apl = $arr_data['friendly_url'];
    }
    else
    {
        $str_apl = $str_apl . '/';
    }
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiBhcmlhLWhpZGRlbj0idHJ1ZSIgcm9sZT0iaW1nIiBjbGFzcz0iaWNvbmlmeSBpY29uaWZ5LS1sb2dvcyIgd2lkdGg9IjMxLjg4IiBoZWlnaHQ9IjMyIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWlkWU1pZCBtZWV0IiB2aWV3Qm94PSIwIDAgMjU2IDI1NyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJJY29uaWZ5SWQxODEzMDg4ZmUxZmJjMDFmYjQ2NiIgeDE9Ii0uODI4JSIgeDI9IjU3LjYzNiUiIHkxPSI3LjY1MiUiIHkyPSI3OC40MTElIj48c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjNDFEMUZGIj48L3N0b3A+PHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjQkQzNEZFIj48L3N0b3A+PC9saW5lYXJHcmFkaWVudD48bGluZWFyR3JhZGllbnQgaWQ9Ikljb25pZnlJZDE4MTMwODhmZTFmYmMwMWZiNDY3IiB4MT0iNDMuMzc2JSIgeDI9IjUwLjMxNiUiIHkxPSIyLjI0MiUiIHkyPSI4OS4wMyUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkVBODMiPjwvc3RvcD48c3RvcCBvZmZzZXQ9IjguMzMzJSIgc3RvcC1jb2xvcj0iI0ZGREQzNSI+PC9zdG9wPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI0ZGQTgwMCI+PC9zdG9wPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxwYXRoIGZpbGw9InVybCgjSWNvbmlmeUlkMTgxMzA4OGZlMWZiYzAxZmI0NjYpIiBkPSJNMjU1LjE1MyAzNy45MzhMMTM0Ljg5NyAyNTIuOTc2Yy0yLjQ4MyA0LjQ0LTguODYyIDQuNDY2LTExLjM4Mi4wNDhMLjg3NSAzNy45NThjLTIuNzQ2LTQuODE0IDEuMzcxLTEwLjY0NiA2LjgyNy05LjY3bDEyMC4zODUgMjEuNTE3YTYuNTM3IDYuNTM3IDAgMCAwIDIuMzIyLS4wMDRsMTE3Ljg2Ny0yMS40ODNjNS40MzgtLjk5MSA5LjU3NCA0Ljc5NiA2Ljg3NyA5LjYyWiI+PC9wYXRoPjxwYXRoIGZpbGw9InVybCgjSWNvbmlmeUlkMTgxMzA4OGZlMWZiYzAxZmI0NjcpIiBkPSJNMTg1LjQzMi4wNjNMOTYuNDQgMTcuNTAxYTMuMjY4IDMuMjY4IDAgMCAwLTIuNjM0IDMuMDE0bC01LjQ3NCA5Mi40NTZhMy4yNjggMy4yNjggMCAwIDAgMy45OTcgMy4zNzhsMjQuNzc3LTUuNzE4YzIuMzE4LS41MzUgNC40MTMgMS41MDcgMy45MzYgMy44MzhsLTcuMzYxIDM2LjA0N2MtLjQ5NSAyLjQyNiAxLjc4MiA0LjUgNC4xNTEgMy43OGwxNS4zMDQtNC42NDljMi4zNzItLjcyIDQuNjUyIDEuMzYgNC4xNSAzLjc4OGwtMTEuNjk4IDU2LjYyMWMtLjczMiAzLjU0MiAzLjk3OSA1LjQ3MyA1Ljk0MyAyLjQzN2wxLjMxMy0yLjAyOGw3Mi41MTYtMTQ0LjcyYzEuMjE1LTIuNDIzLS44OC01LjE4Ni0zLjU0LTQuNjcybC0yNS41MDUgNC45MjJjLTIuMzk2LjQ2Mi00LjQzNS0xLjc3LTMuNzU5LTQuMTE0bDE2LjY0Ni01Ny43MDVjLjY3Ny0yLjM1LTEuMzctNC41ODMtMy43NjktNC4xMTNaIj48L3BhdGg+PC9zdmc+" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title><?php echo $str_label; ?></title>
    <style>
		html,body{width:100%;height:100%;padding:0;margin:0;font-family:Open Sans,sans-serif}.warning{--color-primary: #2B3244;position:relative;height:100%;padding:32px;border-top:8px solid var(--color-primary);color:var(--color-primary);background-color:#f7f8fa;box-sizing:border-box}.warning:before{content:"";position:absolute;bottom:0;right:0;width:855px;height:768px;background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODU1IiBoZWlnaHQ9Ijc2OCIgdmlld0JveD0iMCAwIDg1NSA3NjgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxnIG9wYWNpdHk9IjAuMjUiPgo8cGF0aCBkPSJNNTc1LjU4NSA0NjMuMDkzTDUwMy40NiA1MzUuMjE4QzQ5OS41NTUgNTM5LjEyMyA0OTMuMjIzIDUzOS4xMjMgNDg5LjMxOCA1MzUuMjE4TDQ2Ni42MTkgNTEyLjUxOEM0NjAuNTAzIDUwNi40MDMgNDUwLjAzMyA1MTAuNDA5IDQ0OS41NjIgNTE5LjA0Nkw0NDIuNTQ3IDY0Ny44NTFDNDQyLjIyNCA2NTMuNzg2IDQ0Ny4xMTggNjU4LjY5MSA0NTMuMDUzIDY1OC4zODJMNTgyLjEzOSA2NTEuNjQ3QzU5MC43ODggNjUxLjE5NiA1OTQuODEzIDY0MC43MTMgNTg4LjY4OSA2MzQuNTg5TDU2My41NjQgNjA5LjQ2NEM1NTkuNjU5IDYwNS41NTkgNTU5LjY1OSA1OTkuMjI3IDU2My41NjQgNTk1LjMyMkw2NDguNDE3IDUxMC40NjlDNjUyLjMyMiA1MDYuNTY0IDY1Mi4zMjIgNTAwLjIzMiA2NDguNDE3IDQ5Ni4zMjdMNjIzLjg5NiA0NzEuODA2QzYxNy43ODkgNDY1LjY5OSA2MjEuNzc1IDQ1NS4yNDMgNjMwLjM5OCA0NTQuNzUxTDc1OC4xOTMgNDQ3LjQ2NEM3NjQuMTM4IDQ0Ny4xMjYgNzY5LjA2IDQ1Mi4wMjUgNzY4Ljc0OCA0NTcuOTcyTDc2Mi4wMjIgNTg2LjMyN0M3NjEuNTY5IDU5NC45NzQgNzUxLjA4OCA1OTguOTk3IDc0NC45NjUgNTkyLjg3NUw3MjEuNjAzIDU2OS41MTJDNzE3LjY5NyA1NjUuNjA3IDcxMS4zNjYgNTY1LjYwNyA3MDcuNDYgNTY5LjUxMkw2MzMuOTIxIDY0My4wNTEiIHN0cm9rZT0iYmxhY2siIHN0cm9rZS13aWR0aD0iMTYiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPgo8cGF0aCBkPSJNNTcyLjQwMyA3MDMuODYzTDE2NC40MDIgMTExMS44NiIgc3Ryb2tlPSJibGFjayIgc3Ryb2tlLXdpZHRoPSIxNiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+CjxwYXRoIGQ9Ik02NDAuOTkyIDM5Ni45NzhMMTE2MC43MiAtMTIyLjc0NSIgc3Ryb2tlPSJibGFjayIgc3Ryb2tlLXdpZHRoPSIxNiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+CjwvZz4KPC9zdmc+Cg==);background-repeat:no-repeat}@media screen and (min-width: 1366px){.warning .content{max-width:50%}}@media screen and (min-width: 1536px){.warning .content{max-width:50%}}.warning .title{padding:0;margin:0 0 16px;font-size:32px;line-height:48px;font-weight:700}.warning .text{font-size:16px;line-height:28px}.warning .text~.text{margin-bottom:16px}.warning .button.cta{margin-top:24px}.warning .button{--color-primary: #1C5BFE;padding:16px;border:1px solid var(--color-primary);border-radius:10px;color:#fcfcfc;font-size:16px;line-height:24px;font-weight:700;background-color:var(--color-primary);box-shadow:0 4px 16px var(--color-primary),inset 0 4px 4px #ffffff78;box-sizing:border-box;transition:all .25s ease-in-out;cursor:pointer}.warning .button:hover{background-color:#072d90;box-shadow:0 4px 4px var(--color-primary),inset 0 4px 4px #ffffff78}
	</style>
  </head>
  <body>
    <section class="warning">
      <div class="content">
		<a href="<?php echo trim($str_apl); ?>" style="text-decoration: none;">
			<span class="button cta"><?php echo $str_label; ?></span>
		</a>       
      </div>
    </section>
  </body>
</html>