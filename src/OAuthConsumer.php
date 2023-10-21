<?php

namespace Ternaryop\TinyOAuth;

class OAuthConsumer {
  public string $key;
  public string $secret;
  public string $callback_url;

  function __construct(string $key, string $secret, string $callback_url = NULL) {
    $this->key = $key;
    $this->secret = $secret;
    $this->callback_url = $callback_url;
  }

  function __toString() {
    return "OAuthConsumer[key=$this->key,secret=$this->secret]";
  }
}

