<?php


namespace Bytes\Response\Common\Interfaces;


use DateInterval;

/**
 * Interface AccessTokenInterface
 * @package Bytes\Response\Common\Interfaces
 *
 * @deprecated v0.0.2 Use mrgoodbytes8667/response-bundle instead
 */
interface AccessTokenInterface
{
    /**
     * @return string|null
     */
    public function getAccessToken(): ?string;

    /**
     * @return string|null
     */
    public function getRefreshToken(): ?string;

    /**
     * @return DateInterval|int|null
     */
    public function getExpiresIn();

    /**
     * @return string[]|string|null
     */
    public function getScope();

    /**
     * @return string|null
     */
    public function getTokenType(): ?string;
}