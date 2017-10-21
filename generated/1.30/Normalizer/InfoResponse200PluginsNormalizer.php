<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_30\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class InfoResponse200PluginsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\V1_30\\Model\\InfoResponse200Plugins') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_30\Model\InfoResponse200Plugins) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_30\Model\InfoResponse200Plugins();
        if (property_exists($data, 'Volume')) {
            $values = [];
            foreach ($data->{'Volume'} as $value) {
                $values[] = $value;
            }
            $object->setVolume($values);
        }
        if (property_exists($data, 'Network')) {
            $values_1 = [];
            foreach ($data->{'Network'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setNetwork($values_1);
        }
        if (property_exists($data, 'Log')) {
            $values_2 = [];
            foreach ($data->{'Log'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setLog($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getVolume()) {
            $values = [];
            foreach ($object->getVolume() as $value) {
                $values[] = $value;
            }
            $data->{'Volume'} = $values;
        }
        if (null !== $object->getNetwork()) {
            $values_1 = [];
            foreach ($object->getNetwork() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Network'} = $values_1;
        }
        if (null !== $object->getLog()) {
            $values_2 = [];
            foreach ($object->getLog() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'Log'} = $values_2;
        }

        return $data;
    }
}
