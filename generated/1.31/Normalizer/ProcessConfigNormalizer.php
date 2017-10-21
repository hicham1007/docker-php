<?php

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\V1_31\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ProcessConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Docker\\API\\V1_31\\Model\\ProcessConfig') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Docker\API\V1_31\Model\ProcessConfig) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Docker\API\V1_31\Model\ProcessConfig();
        if (property_exists($data, 'privileged')) {
            $object->setPrivileged($data->{'privileged'});
        }
        if (property_exists($data, 'user')) {
            $object->setUser($data->{'user'});
        }
        if (property_exists($data, 'tty')) {
            $object->setTty($data->{'tty'});
        }
        if (property_exists($data, 'entrypoint')) {
            $object->setEntrypoint($data->{'entrypoint'});
        }
        if (property_exists($data, 'arguments')) {
            $values = [];
            foreach ($data->{'arguments'} as $value) {
                $values[] = $value;
            }
            $object->setArguments($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPrivileged()) {
            $data->{'privileged'} = $object->getPrivileged();
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        }
        if (null !== $object->getTty()) {
            $data->{'tty'} = $object->getTty();
        }
        if (null !== $object->getEntrypoint()) {
            $data->{'entrypoint'} = $object->getEntrypoint();
        }
        if (null !== $object->getArguments()) {
            $values = [];
            foreach ($object->getArguments() as $value) {
                $values[] = $value;
            }
            $data->{'arguments'} = $values;
        }

        return $data;
    }
}
