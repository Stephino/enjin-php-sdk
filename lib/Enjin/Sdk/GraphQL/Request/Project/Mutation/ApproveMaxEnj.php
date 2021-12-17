<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;

/**
 * Request for approving the crypto items contract to spend the maximum amount of ENJ
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class ApproveMaxEnj extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.ApproveMaxEnj";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
}

/*EOF*/