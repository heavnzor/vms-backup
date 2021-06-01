<?php

namespace Container4WF0o7H;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder67ea1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere2c74 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaf6a4 = [
        
    ];

    public function getConnection()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getConnection', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getMetadataFactory', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getExpressionBuilder', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'beginTransaction', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getCache', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getCache();
    }

    public function transactional($func)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'transactional', array('func' => $func), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->transactional($func);
    }

    public function commit()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'commit', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->commit();
    }

    public function rollback()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'rollback', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getClassMetadata', array('className' => $className), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'createQuery', array('dql' => $dql), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'createNamedQuery', array('name' => $name), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'createQueryBuilder', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'flush', array('entity' => $entity), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'clear', array('entityName' => $entityName), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->clear($entityName);
    }

    public function close()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'close', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->close();
    }

    public function persist($entity)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'persist', array('entity' => $entity), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'remove', array('entity' => $entity), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'refresh', array('entity' => $entity), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'detach', array('entity' => $entity), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'merge', array('entity' => $entity), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getRepository', array('entityName' => $entityName), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'contains', array('entity' => $entity), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getEventManager', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getConfiguration', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'isOpen', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getUnitOfWork', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getProxyFactory', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'initializeObject', array('obj' => $obj), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'getFilters', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'isFiltersStateClean', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'hasFilters', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return $this->valueHolder67ea1->hasFilters();
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

        $instance->initializere2c74 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder67ea1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder67ea1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder67ea1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, '__get', ['name' => $name], $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        if (isset(self::$publicPropertiesaf6a4[$name])) {
            return $this->valueHolder67ea1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67ea1;

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

        $targetObject = $this->valueHolder67ea1;
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
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67ea1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder67ea1;
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
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, '__isset', array('name' => $name), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67ea1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder67ea1;
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
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, '__unset', array('name' => $name), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67ea1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder67ea1;
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
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, '__clone', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        $this->valueHolder67ea1 = clone $this->valueHolder67ea1;
    }

    public function __sleep()
    {
        $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, '__sleep', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;

        return array('valueHolder67ea1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere2c74 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere2c74;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere2c74 && ($this->initializere2c74->__invoke($valueHolder67ea1, $this, 'initializeProxy', array(), $this->initializere2c74) || 1) && $this->valueHolder67ea1 = $valueHolder67ea1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder67ea1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67ea1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
