<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_26\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ServiceSpecModeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\V1_26\\Model\\ServiceSpecMode') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_26\Model\ServiceSpecMode) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_26\Model\ServiceSpecMode();
        if (property_exists($data, 'Replicated')) {
            $object->setReplicated($this->denormalizer->denormalize($data->{'Replicated'}, 'Docker\\API\\V1_26\\Model\\ServiceSpecModeReplicated', 'json', $context));
        }
        if (property_exists($data, 'Global')) {
            $object->setGlobal($data->{'Global'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getReplicated()) {
            $data->{'Replicated'} = $this->normalizer->normalize($object->getReplicated(), 'json', $context);
        }
        if (null !== $object->getGlobal()) {
            $data->{'Global'} = $object->getGlobal();
        }

        return $data;
    }
}
