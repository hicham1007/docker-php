<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_25\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class IPAMNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\V1_25\\Model\\IPAM') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_25\Model\IPAM) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_25\Model\IPAM();
        if (property_exists($data, 'Driver')) {
            $object->setDriver($data->{'Driver'});
        }
        if (property_exists($data, 'Config')) {
            $values = [];
            foreach ($data->{'Config'} as $value) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setConfig($values);
        }
        if (property_exists($data, 'Options')) {
            $values_2 = [];
            foreach ($data->{'Options'} as $value_2) {
                $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_2 as $key_1 => $value_3) {
                    $values_3[$key_1] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $object->setOptions($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDriver()) {
            $data->{'Driver'} = $object->getDriver();
        }
        if (null !== $object->getConfig()) {
            $values = [];
            foreach ($object->getConfig() as $value) {
                $values_1 = new \stdClass();
                foreach ($value as $key => $value_1) {
                    $values_1->{$key} = $value_1;
                }
                $values[] = $values_1;
            }
            $data->{'Config'} = $values;
        }
        if (null !== $object->getOptions()) {
            $values_2 = [];
            foreach ($object->getOptions() as $value_2) {
                $values_3 = new \stdClass();
                foreach ($value_2 as $key_1 => $value_3) {
                    $values_3->{$key_1} = $value_3;
                }
                $values_2[] = $values_3;
            }
            $data->{'Options'} = $values_2;
        }

        return $data;
    }
}
