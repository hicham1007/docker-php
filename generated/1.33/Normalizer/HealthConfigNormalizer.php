<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_33\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HealthConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\V1_33\\Model\\HealthConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_33\Model\HealthConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_33\Model\HealthConfig();
        if (property_exists($data, 'Test')) {
            $values = [];
            foreach ($data->{'Test'} as $value) {
                $values[] = $value;
            }
            $object->setTest($values);
        }
        if (property_exists($data, 'Interval')) {
            $object->setInterval($data->{'Interval'});
        }
        if (property_exists($data, 'Timeout')) {
            $object->setTimeout($data->{'Timeout'});
        }
        if (property_exists($data, 'Retries')) {
            $object->setRetries($data->{'Retries'});
        }
        if (property_exists($data, 'StartPeriod')) {
            $object->setStartPeriod($data->{'StartPeriod'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTest()) {
            $values = [];
            foreach ($object->getTest() as $value) {
                $values[] = $value;
            }
            $data->{'Test'} = $values;
        }
        if (null !== $object->getInterval()) {
            $data->{'Interval'} = $object->getInterval();
        }
        if (null !== $object->getTimeout()) {
            $data->{'Timeout'} = $object->getTimeout();
        }
        if (null !== $object->getRetries()) {
            $data->{'Retries'} = $object->getRetries();
        }
        if (null !== $object->getStartPeriod()) {
            $data->{'StartPeriod'} = $object->getStartPeriod();
        }

        return $data;
    }
}
