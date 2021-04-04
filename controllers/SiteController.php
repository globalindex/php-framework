<?php

namespace App\controllers;

use globalindex\phpmvc\Application;
use globalindex\phpmvc\Controller;
use globalindex\phpmvc\Request;
use globalindex\phpmvc\Response;
use App\models\ContactForm;

/**
 * Class SiteController
 * @autor Dietrich Bojko
 * @package App\controllers
 */
class SiteController extends Controller
{
  public function home()
  {
    $params = [
      "name" => "Test"
    ];
    return $this->render("home", $params);
  }

  public function contact(Request $request, Response $response)
  {
    $contact = new ContactForm();
    if ($request->isPost()) {
      $contact->loadData($request->getBody());
      if ($contact->validate() && $contact->send()) {
        Application::$app->session->setFlash("success", "Thanks for contacting us.");
        return $response->redirect("/contact");
      }
    }
    return $this->render("contact", [
      'model' => $contact
    ]);
  }
}