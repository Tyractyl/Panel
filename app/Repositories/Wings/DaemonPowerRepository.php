<?php

namespace Tyractyl\Repositories\Wings;

use Webmozart\Assert\Assert;
use Tyractyl\Models\Server;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\TransferException;
use Tyractyl\Exceptions\Http\Connection\DaemonConnectionException;

/**
 * @method \Tyractyl\Repositories\Wings\DaemonPowerRepository setNode(\Tyractyl\Models\Node $node)
 * @method \Tyractyl\Repositories\Wings\DaemonPowerRepository setServer(\Tyractyl\Models\Server $server)
 */
class DaemonPowerRepository extends DaemonRepository
{
    /**
     * Sends a power action to the server instance.
     *
     * @throws DaemonConnectionException
     */
    public function send(string $action): ResponseInterface
    {
        Assert::isInstanceOf($this->server, Server::class);

        try {
            return $this->getHttpClient()->post(
                sprintf('/api/servers/%s/power', $this->server->uuid),
                ['json' => ['action' => $action]]
            );
        } catch (TransferException $exception) {
            throw new DaemonConnectionException($exception);
        }
    }
}
