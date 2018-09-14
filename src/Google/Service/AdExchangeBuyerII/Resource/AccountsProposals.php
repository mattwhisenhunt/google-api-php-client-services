<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * The "proposals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adexchangebuyer2Service = new Google_Service_AdExchangeBuyerII(...);
 *   $proposals = $adexchangebuyer2Service->proposals;
 *  </code>
 */
class Google_Service_AdExchangeBuyerII_Resource_AccountsProposals extends Google_Service_Resource
{
  /**
   *  (proposals.accept)
   *
   * @param Google_Service_AdExchangeBuyerII_AcceptProposalRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Proposal
   */
  public function accept($accountId, $proposalId, Google_Service_AdExchangeBuyerII_AcceptProposalRequest $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'proposalId' => $proposalId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('accept', array($params), "Google_Service_AdExchangeBuyerII_Proposal");
  }
  /**
   *  (proposals.addNote)
   *
   * @param Google_Service_AdExchangeBuyerII_AddNoteRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Note
   */
  public function addNote($accountId, $proposalId, Google_Service_AdExchangeBuyerII_AddNoteRequest $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'proposalId' => $proposalId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addNote', array($params), "Google_Service_AdExchangeBuyerII_Note");
  }
  /**
   *  (proposals.cancelNegotiation)
   *
   * @param Google_Service_AdExchangeBuyerII_CancelNegotiationRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Proposal
   */
  public function cancelNegotiation($accountId, $proposalId, Google_Service_AdExchangeBuyerII_CancelNegotiationRequest $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'proposalId' => $proposalId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('cancelNegotiation', array($params), "Google_Service_AdExchangeBuyerII_Proposal");
  }
  /**
   *  (proposals.completeSetup)
   *
   * @param Google_Service_AdExchangeBuyerII_CompleteSetupRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Proposal
   */
  public function completeSetup($accountId, $proposalId, Google_Service_AdExchangeBuyerII_CompleteSetupRequest $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'proposalId' => $proposalId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('completeSetup', array($params), "Google_Service_AdExchangeBuyerII_Proposal");
  }
  /**
   *  (proposals.create)
   *
   * @param Google_Service_AdExchangeBuyerII_Proposal $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Proposal
   */
  public function create($accountId, Google_Service_AdExchangeBuyerII_Proposal $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Google_Service_AdExchangeBuyerII_Proposal");
  }
  /**
   *  (proposals.get)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Proposal
   */
  public function get($accountId, $proposalId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'proposalId' => $proposalId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_AdExchangeBuyerII_Proposal");
  }
  /**
   *  (proposals.listAccountsProposals)
   *
   * @param array $optParams Optional parameters.
   *
   * @return Google_Service_AdExchangeBuyerII_ListProposalsResponse
   */
  public function listAccountsProposals($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_AdExchangeBuyerII_ListProposalsResponse");
  }
  /**
   *  (proposals.pause)
   *
   * @param Google_Service_AdExchangeBuyerII_PauseProposalRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Proposal
   */
  public function pause($accountId, $proposalId, Google_Service_AdExchangeBuyerII_PauseProposalRequest $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'proposalId' => $proposalId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('pause', array($params), "Google_Service_AdExchangeBuyerII_Proposal");
  }
  /**
   *  (proposals.resume)
   *
   * @param Google_Service_AdExchangeBuyerII_ResumeProposalRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Proposal
   */
  public function resume($accountId, $proposalId, Google_Service_AdExchangeBuyerII_ResumeProposalRequest $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'proposalId' => $proposalId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('resume', array($params), "Google_Service_AdExchangeBuyerII_Proposal");
  }
  /**
   *  (proposals.update)
   *
   * @param Google_Service_AdExchangeBuyerII_Proposal $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_AdExchangeBuyerII_Proposal
   */
  public function update($accountId, $proposalId, Google_Service_AdExchangeBuyerII_Proposal $postBody, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'proposalId' => $proposalId ,'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_AdExchangeBuyerII_Proposal");
  }
}
