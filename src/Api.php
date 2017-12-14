<?php

namespace Ifedor\SonlineApi;

use Monolog\Logger;

class Api {

  /**
   * @var Logger
   */
  private $logger;

  /**
   * @var string
   */
  private $apiKey;

  /**
   * @var string
   */
  private $base_url = 'https://api.sonline.su';

  /**
   * Api constructor.
   *
   * @param \Monolog\Logger $logger
   * @param $apiKey
   */
  public function __construct(Logger $logger, $apiKey) {
    $this->logger = $logger;
    $this->apiKey = $apiKey;
  }

  /**
   * @return string
   */
  public function getBaseUrl() {
    return $this->base_url;
  }

  /**
   * @param string $base_url Base amoCRM url with '%s' for subdomain
   * @return $this
   */
  public function setBaseUrl($base_url) {
    $this->base_url = $base_url;

    return $this;
  }

  /**
   * Creates Request object.
   *
   * @return Request
   */
  public function getRequest() {
    $request = new Request($this->logger);
    $request->setUrl($this->base_url);

    return $request;
  }

}