<?php
namespace Drupal\d8_custom\Access;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Routing\Access\AccessInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\node\Entity\Node;

class D8EntityAccessCheck implements AccessInterface {

  public function access(Node $node, AccountInterface $account) {
    return AccessResult::allowedIf($node->getOwnerId() == $account->id());
  }

}
