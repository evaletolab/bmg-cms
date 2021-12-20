function dockerwithparams {
  APP_HOME="$PWD/cockpit/"
  sudo docker run -i -t -p "8080:80" -v "${APP_HOME}:/var/www/html"  self/cockpit:latest
}
alias ldi='dockerwithparams $1 $2'