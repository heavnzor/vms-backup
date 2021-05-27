<?php

namespace ContainerHVxD2b9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder36cdf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd3bf7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3db8f = [
        
    ];

    public function getConnection()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getConnection', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getMetadataFactory', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getExpressionBuilder', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'beginTransaction', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getCache', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'transactional', array('func' => $func), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->transactional($func);
    }

    public function commit()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'commit', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->commit();
    }

    public function rollback()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'rollback', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getClassMetadata', array('className' => $className), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'createQuery', array('dql' => $dql), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'createNamedQuery', array('name' => $name), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'createQueryBuilder', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'flush', array('entity' => $entity), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'clear', array('entityName' => $entityName), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->clear($entityName);
    }

    public function close()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'close', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->close();
    }

    public function persist($entity)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'persist', array('entity' => $entity), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'remove', array('entity' => $entity), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'refresh', array('entity' => $entity), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'detach', array('entity' => $entity), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'merge', array('entity' => $entity), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'contains', array('entity' => $entity), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getEventManager', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getConfiguration', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'isOpen', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getUnitOfWork', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getProxyFactory', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'initializeObject', array('obj' => $obj), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'getFilters', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'isFiltersStateClean', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'hasFilters', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return $this->valueHolder36cdf->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerd3bf7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder36cdf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder36cdf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder36cdf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, '__get', ['name' => $name], $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        if (isset(self::$publicProperties3db8f[$name])) {
            return $this->valueHolder36cdf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36cdf;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder36cdf;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36cdf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder36cdf;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, '__isset', array('name' => $name), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36cdf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder36cdf;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, '__unset', array('name' => $name), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder36cdf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder36cdf;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, '__clone', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        $this->valueHolder36cdf = clone $this->valueHolder36cdf;
    }

    public function __sleep()
    {
        $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, '__sleep', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;

        return array('valueHolder36cdf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd3bf7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd3bf7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd3bf7 && ($this->initializerd3bf7->__invoke($valueHolder36cdf, $this, 'initializeProxy', array(), $this->initializerd3bf7) || 1) && $this->valueHolder36cdf = $valueHolder36cdf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder36cdf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder36cdf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
