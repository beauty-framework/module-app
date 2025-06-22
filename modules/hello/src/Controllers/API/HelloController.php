<?php
declare(strict_types=1);

namespace Module\Hello\Controllers\API;

use App\Responses\XmlResponse;
use Beauty\Core\Router\Route;
use Beauty\Http\Enums\HttpMethodsEnum;
use Beauty\Http\Request\HttpRequest;
use Beauty\Http\Response\JsonResponse;
use Module\Hello\Repositories\Contracts\EmployersRepositoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;

class HelloController
{
    #[Route(HttpMethodsEnum::GET, '/api/hello')]
    public function index(HttpRequest $request, EmployersRepositoryInterface $repository): ResponseInterface
    {
        return new XmlResponse(200, [
            'message' => 'Hello, world',
            'data' => $repository->list(),
        ]);
    }
}