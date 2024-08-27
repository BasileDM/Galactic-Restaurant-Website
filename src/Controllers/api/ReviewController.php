<?php

namespace src\controllers\api;

use src\Repositories\ReviewRepository;
use src\Services\Reponse;

class ReviewController
{
  use Reponse;

  public function GetReviews()
  {
    $reviewsRepository = new ReviewRepository();
    $reviews = $reviewsRepository->getAllReviews();
    echo json_encode($reviews);
    exit;
  }
}
