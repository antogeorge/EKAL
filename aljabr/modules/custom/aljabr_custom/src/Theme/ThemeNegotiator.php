<?php
namespace Drupal\aljabr_custom\Theme;

use Drupal\Core\Theme\ThemeNegotiatorInterface;
use Drupal\Core\Routing\RouteMatchInterface;

class ThemeNegotiator implements ThemeNegotiatorInterface {
  /**
   * {@inheritdoc}
   */
  public function applies(RouteMatchInterface $route_match) {
    // Use this theme on a certain route.
    // return $route_match->getRouteName() == 'example_route_name';

    // Or use this for more than one route:
    $possible_routes = array(
        'user.register',
        'user.logout',
		'entity.user.collection',
		'user.pass',
		'user.page',
		'user.login',
		'entity.user.canonical',
		'system.admin'
    );

    return (in_array($route_match->getRouteName(), $possible_routes));
  }

  /**
   * {@inheritdoc}
   */
  public function determineActiveTheme(RouteMatchInterface $route_match) {
    // Here you return the actual theme name.
    return 'seven';
  }

}
