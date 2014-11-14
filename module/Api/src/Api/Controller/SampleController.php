<?php
/*If limited access. Use this instead of b
$hasAccess=$this->VerifyUser()->verify();
if(!$hasAccess){
    $response = $this->getResponse();
    $response->setStatusCode(403);
    return $response;
}
*/
namespace Api\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class SampleController extends AbstractRestfulController
{
    /* //use when you have a Module for data //
    private $mapper;
    
    public function getMapper() {
        if(null===$this->mapper){
            $this->mapper=$this->getServiceLocator()->get("Sample\Model\SamplesMapper");
        }
        return $this->mapper;
    }
    */
    public function create($data) {
        return new JsonModel();
    }

    public function delete($id) {
        return new JsonModel();
    }

    public function deleteList() {
        return new JsonModel();
    }

    public function get($id) {
        return new JsonModel();
    }

    public function getList() {
        return new JsonModel();
    }

    public function patch($id, $data) {
        return new JsonModel();
    }

    public function replaceList($data) {
        return new JsonModel();
    }

    public function update($id, $data) {
        return new JsonModel();
    }

}
